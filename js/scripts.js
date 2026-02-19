// Add base path constant at the top of the file
const BASE_PATH = '';

// Helper function to ensure correct URL formatting
function getFullUrl(url) {
    if (!url) return '';
    if (url.startsWith('http')) return url;
    if (url.startsWith(BASE_PATH)) return url;
    return `${BASE_PATH}${url.replace(/^\.?\//, '/')}`;
}

document.querySelectorAll('a[href]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        // Get the link's ID
        const linkId = this.getAttribute('id');
        
        // Check if it's one of the special links that should open in new tab
        if (linkId === 'sidebar-github-link' || linkId === 'sidebar-demo-link') {
            this.setAttribute('target', '_blank');
            return; // Let the default link behavior handle it
        }

        const href = this.getAttribute('href');
        
        // Check if it's an anchor link (starts with #)
        if (href.startsWith('#')) {
            e.preventDefault();
            const targetElement = document.querySelector(href);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth' });
            }
        }
        // For all other links, let default behavior handle it
    });
});


// Navbar scroll effect
window.addEventListener('scroll', function() {
  const nav = document.querySelector('nav');
  if (window.scrollY > 50) {
      nav.classList.add('bg-opacity-90');
  } else {
      nav.classList.remove('bg-opacity-90');
  }
});

document.addEventListener("DOMContentLoaded", function () {
const swiper = new Swiper('.swiper-container', {
loop: true,
navigation: {
  nextEl: '.swiper-button-next',
  prevEl: '.swiper-button-prev',
},
pagination: {
  el: '.swiper-pagination',
  clickable: true,
},
autoplay: {
  delay: 3000,
},
});
});

// Wait for DOM to be loaded
document.addEventListener('DOMContentLoaded', function() {
    // Add event listeners for navigation buttons
    const prevButton = document.getElementById('prev-image');
    const nextButton = document.getElementById('next-image');
    
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            if (currentImageIndex > 0) {
                currentImageIndex--;
                updateGallery();
            }
        });
    }
    
    if (nextButton) {
        nextButton.addEventListener('click', () => {
            if (currentImageIndex < currentGalleryImages.length - 1) {
                currentImageIndex++;
                updateGallery();
            }
        });
    }

    // Add link click handlers
    document.querySelectorAll('a[href]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            // Get the link's ID
            const linkId = this.getAttribute('id');
            
            // Check if it's one of the special links that should open in new tab
            if (linkId === 'modal-github-link' || linkId === 'modal-demo-link') {
                this.setAttribute('target', '_blank');
                return; // Let the default link behavior handle it
            }

            const href = this.getAttribute('href');
            
            // Check if it's an anchor link (starts with #)
            if (href.startsWith('#')) {
                e.preventDefault();
                const targetElement = document.querySelector(href);
                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            }
            // For all other links, let default behavior handle it
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.classList.add('bg-opacity-90');
        } else {
            nav.classList.remove('bg-opacity-90');
        }
    });

    // Parallax effect for hero section
    const heroSection = document.getElementById('hero');
    const parallaxWrapper = document.querySelector('.parallax-wrapper');
    const sceneContainer = document.querySelector('.scene-container');
    
    if (heroSection && parallaxWrapper && sceneContainer) {
        const heroHeight = heroSection.offsetHeight;
        let ticking = false;
        
        function updateParallax() {
            const scrollPosition = window.pageYOffset;
            
            // Only apply parallax effect while the hero section is in view
            if (scrollPosition <= heroHeight) {
                // Fixed position until scrolled past
                parallaxWrapper.style.transform = `translateY(${scrollPosition * 0.5}px)`;
                
                // Move scene elements at different rates for depth
                sceneContainer.style.transform = `translateY(${scrollPosition * 0.2}px) translateZ(-50px)`;
                
                // Keep the hero section visible while scrolling past
                heroSection.style.visibility = 'visible';
            } else {
                // Hide the section when scrolled past
                heroSection.style.visibility = 'hidden';
            }
            
            ticking = false;
        }
        
        // Optimize scroll event with requestAnimationFrame
        window.addEventListener('scroll', function() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    updateParallax();
                    ticking = false;
                });
                ticking = true;
            }
        });
        
        // Initial call to set positions
        updateParallax();
    }
    
    // Lightbox functionality
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    
    if (lightbox && lightboxImage) {
        window.openLightbox = function(imageUrl) {
            lightboxImage.src = getFullUrl(imageUrl);
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            
            // Add event listener to close lightbox when clicked
            lightbox.addEventListener('click', function() {
                closeLightbox();
            });
        };
        
        window.closeLightbox = function() {
            lightbox.classList.add('hidden');
            lightbox.classList.remove('flex');
        };
    }
});

// Project modal functionality
let currentGalleryImages = [];
let currentImageIndex = 0;

// Expose openProjectModal to global scope
window.openProjectModal = function(projectName) {
    const projectDetails = window.projectDetails[projectName];
    if (!projectDetails) {
        console.error('Project details not found for:', projectName);
        return;
    }
    
    console.log('Opening project:', projectName, projectDetails); // Debug log
    
    // Store gallery images
    currentGalleryImages = [];
    
    // Add gallery images if they exist
    if (Array.isArray(projectDetails.gallery)) {
        currentGalleryImages = projectDetails.gallery.map(image => ({
            url: image.url || image,  // Handle both object and string formats
            title: image.title || ''
        }));
    } else if (projectDetails.gallery) {
        // If gallery is a single string or object
        currentGalleryImages = [{
            url: projectDetails.gallery.url || projectDetails.gallery,
            title: projectDetails.gallery.title || ''
        }];
    }
    
    console.log('Current gallery images:', currentGalleryImages); // Debug log
    currentImageIndex = 0;
    
    // Populate modal content
    const titleElement = document.getElementById('modal-project-title');
    const descriptionElement = document.getElementById('modal-project-description');
    
    if (titleElement) titleElement.textContent = projectName || '';
    if (descriptionElement) descriptionElement.textContent = projectDetails.fullDescription || '';
    
    // Populate paragraphe1 (formerly features)
    const paragraphe1List = document.getElementById('modal-project-paragraphe1');
    if (paragraphe1List && Array.isArray(projectDetails.paragraphe1)) {
        paragraphe1List.innerHTML = projectDetails.paragraphe1
            .filter(item => item) // Remove null/undefined items
            .map(item => `<p class="mb-2">${escapeHtml(item)}</p>`)
            .join('');
    }
    
    // Populate paragraphe2 (formerly challenges)
    const paragraphe2List = document.getElementById('modal-project-paragraphe2');
    if (paragraphe2List && Array.isArray(projectDetails.paragraphe2)) {
        paragraphe2List.innerHTML = projectDetails.paragraphe2
            .filter(item => item) // Remove null/undefined items
            .map(item => `<p class="mb-2">${escapeHtml(item)}</p>`)
            .join('');
    }

    // Populate paragraphe3 (formerly technicalDetails)
    const paragraphe3List = document.getElementById('modal-project-paragraphe3');
    if (paragraphe3List && Array.isArray(projectDetails.paragraphe3)) {
        paragraphe3List.innerHTML = projectDetails.paragraphe3
            .filter(item => item) // Remove null/undefined items
            .map(item => `<p class="mb-2">${escapeHtml(item)}</p>`)
            .join('');
    }

    // Populate competencies
    const competenciesList = document.getElementById('modal-project-competencies');
    if (competenciesList && Array.isArray(projectDetails.competence)) {
        competenciesList.innerHTML = projectDetails.competence
            .filter(competence => competence) // Remove null/undefined items
            .map(competence => `
                <div class="competence-badge group relative">
                    <div class="bg-gradient-to-r from-purple-600 to-purple-800 text-white px-4 py-2 rounded-full text-sm font-medium shadow-lg hover:shadow-purple-500/20 transition-all duration-300 transform hover:-translate-y-1">
                        ${escapeHtml(competence)}
                        <div class="absolute -top-2 -right-2 w-4 h-4 bg-green-400 rounded-full animate-pulse"></div>
                    </div>
                </div>
            `)
            .join('');
    }
    
    // Update links
    const githubLink = document.getElementById('modal-github-link');
    const demoLink = document.getElementById('modal-demo-link');

    if (githubLink) {
        if (projectDetails.githubUrl) {
            githubLink.href = projectDetails.githubUrl;
            githubLink.style.display = 'flex';
        } else {
            githubLink.style.display = 'none';
        }
    }

    if (demoLink) {
        if (projectDetails.liveDemo) {
            demoLink.href = projectDetails.liveDemo;
            demoLink.style.display = 'flex';
        } else {
            demoLink.style.display = 'none';
        }
    }
    
    // Initialize gallery
    updateGallery();
    
    // Show modal
    const modal = document.getElementById('project-modal');
    if (modal) {
        modal.classList.remove('hidden');
    }
}

// Helper function to escape special characters for HTML
function escapeHtml(unsafe) {
    if (unsafe === undefined || unsafe === null) return '';
    return unsafe.toString()
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}

// Helper function to safely encode strings for onclick handlers
function safeEncode(str) {
    if (str === undefined || str === null) return '';
    return str.toString()
        .replace(/\\/g, '\\\\')
        .replace(/'/g, "\\'")
        .replace(/"/g, '\\"')
        .replace(/\n/g, '\\n')
        .replace(/\r/g, '\\r')
        .replace(/\t/g, '\\t');
}

function updateGallery() {
    if (!currentGalleryImages || !Array.isArray(currentGalleryImages) || currentGalleryImages.length === 0) {
        console.warn('No gallery images available');
        return;
    }
    
    console.log('Updating gallery with images:', currentGalleryImages); // Debug log
    
    // Update content sections with images
    const imageContainers = document.querySelectorAll('.project-image-container');
    imageContainers.forEach((container, i) => {
        if (i < currentGalleryImages.length) {
            const image = currentGalleryImages[i];
            if (!image || !image.url) {
                console.warn('Invalid image data at index:', i);
                return;
            }
            
            const imageUrl = getFullUrl(image.url);
            const imageTitle = image.title || '';
            
            container.innerHTML = `
                <div class="relative group cursor-pointer glass-hover" 
                     data-image-url="${imageUrl}"
                     data-image-title="${escapeHtml(imageTitle)}"
                     onclick="window.openImagePreview('${imageUrl}', '${safeEncode(imageTitle)}')">
                    <img src="${imageUrl}" 
                         alt="${escapeHtml(imageTitle)}" 
                         class="w-full h-64 object-cover rounded-lg"
                         onerror="console.error('Failed to load image:', '${imageUrl}')">
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center rounded-lg">
                        <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-center p-4">
                            <p class="text-lg font-semibold">${escapeHtml(imageTitle)}</p>
                            <div class="mt-2">
                                <svg class="w-8 h-8 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        }
    });
    
    // Update thumbnail gallery
    const galleryContainer = document.getElementById('modal-project-gallery');
    if (galleryContainer) {
        galleryContainer.innerHTML = currentGalleryImages
            .filter(image => image && image.url) // Filter out invalid images
            .map(image => {
                const imageUrl = getFullUrl(image.url);
                const imageTitle = image.title || '';
                
                return `
                    <div class="relative group cursor-pointer"
                         data-image-url="${imageUrl}"
                         data-image-title="${escapeHtml(imageTitle)}"
                         onclick="window.openImagePreview('${imageUrl}', '${safeEncode(imageTitle)}')">
                        <img src="${imageUrl}" 
                             alt="${escapeHtml(imageTitle)}" 
                             class="w-full h-24 object-cover rounded-lg"
                             onerror="console.error('Failed to load image:', '${imageUrl}')">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center rounded-lg">
                            <div class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                `;
            }).join('');
    }
}

// Update the openImagePreview function to handle URLs correctly
window.openImagePreview = function(imageUrl, title) {
    const modal = document.getElementById('image-preview-modal');
    const image = document.getElementById('preview-image');
    const titleElement = document.getElementById('preview-title');
    
    if (!modal || !image || !titleElement) {
        console.error('Required elements not found for image preview');
        return;
    }
    
    try {
        // Use the helper function to get the correct URL
        image.src = getFullUrl(imageUrl);
        titleElement.textContent = title || '';
        
        // Show modal
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Prevent scrolling
        
        // Add zoom effect
        requestAnimationFrame(() => {
            image.classList.add('preview-zoom');
        });

        // Handle click events
        const handleClick = (e) => {
            if (e.target === modal || e.target.classList.contains('close-button')) {
                window.closeImagePreview();
            }
        };

        // Handle escape key
        const handleEscape = (e) => {
            if (e.key === 'Escape') {
                window.closeImagePreview();
            }
        };

        modal.addEventListener('click', handleClick);
        document.addEventListener('keydown', handleEscape);

        // Store event listeners for cleanup
        modal._cleanup = () => {
            modal.removeEventListener('click', handleClick);
            document.removeEventListener('keydown', handleEscape);
        };
    } catch (error) {
        console.error('Error opening image preview:', error);
    }
};

window.closeImagePreview = function() {
    const modal = document.getElementById('image-preview-modal');
    const image = document.getElementById('preview-image');
    
    if (!modal || !image) {
        console.error('Required elements not found for closing image preview');
        return;
    }
    
    // Remove zoom effect
    image.classList.remove('preview-zoom');
    
    // Clean up event listeners
    if (modal._cleanup) {
        modal._cleanup();
        modal._cleanup = null;
    }
    
    // Hide modal
    modal.classList.add('hidden');
    document.body.style.overflow = ''; // Restore scrolling
    
    // Clear image source after transition
    setTimeout(() => {
        image.src = '';
    }, 300);
};

function closeProjectModal() {
    const modal = document.getElementById('project-modal');
    if (!modal) return;
    
    modal.classList.add('hidden');
    currentGalleryImages = [];
    currentImageIndex = 0;
}

// Initialize event listeners when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Add click event listener to close button in image preview modal
    const closePreviewButton = document.querySelector('#image-preview-modal button');
    if (closePreviewButton) {
        closePreviewButton.addEventListener('click', window.closeImagePreview);
    }
    
    // Add click event listener to close button in project modal
    const closeProjectButton = document.querySelector('#project-modal button');
    if (closeProjectButton) {
        closeProjectButton.addEventListener('click', closeProjectModal);
    }
    
    // Add click event listener to image preview modal for closing
    const imagePreviewModal = document.getElementById('image-preview-modal');
    if (imagePreviewModal) {
        imagePreviewModal.addEventListener('click', function(e) {
            if (e.target === imagePreviewModal) {
                window.closeImagePreview();
            }
        });
    }
});

// Update the openLightbox function to include title
window.openLightbox = function(imageUrl) {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    
    if (!lightbox || !lightboxImage) return;
    
    lightboxImage.src = getFullUrl(imageUrl);
    
    // Add zoom effect class
    lightboxImage.classList.add('lightbox-zoom');
    
    lightbox.classList.remove('hidden');
    lightbox.classList.add('flex');
    
    // Add event listener to close lightbox when clicked
    lightbox.onclick = function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    };
};

window.closeLightbox = function() {
    const lightbox = document.getElementById('lightbox');
    const lightboxImage = document.getElementById('lightbox-image');
    
    if (!lightbox || !lightboxImage) return;
    
    lightbox.classList.add('hidden');
    lightbox.classList.remove('flex');
    lightboxImage.classList.remove('lightbox-zoom');
};

// Function to toggle veille content visibility
window.toggleVeilleContent = function(contentId) {
    const content = document.getElementById(`content-${contentId}`);
    const icon = document.getElementById(`icon-${contentId}`);
    
    if (content && icon) {
        // Toggle content visibility
        content.classList.toggle('hidden');
        
        // Rotate icon when content is visible
        icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
    }
}