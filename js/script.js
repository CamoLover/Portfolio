const circularProgress = document.querySelectorAll(".circular-progress");

Array.from(circularProgress).forEach((progressBar) => {
    const progressValue = progressBar.querySelector(".percentage");
    const innerCircle = progressBar.querySelector(".inner-circle");
    const svgBackground = progressBar.querySelector(".svg-background"); 
    let startValue = 0,
        endValue = Number(progressBar.getAttribute("data-percentage")),
        speed = 8,
        progressColor = progressBar.getAttribute("data-progress-color");

    svgBackground.style.backgroundImage = `url(${progressBar.getAttribute("data-svg")})`;

    const progress = setInterval(() => {
        startValue++;
        progressValue.textContent = `${startValue}%`;

        innerCircle.style.backgroundColor = `${progressBar.getAttribute(
            "data-inner-circle-color"
        )}`;

        progressBar.style.background = `conic-gradient(${progressColor} ${
            startValue * 3.6
        }deg,${progressBar.getAttribute("data-bg-color")} 0deg)`;
        if (startValue === endValue) {
            clearInterval(progress);
        }
    }, speed);
});
