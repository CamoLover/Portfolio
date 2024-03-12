            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex">
                                    <div>
                                        <h4 class="card-title">Historique des commits</h4>
                                        <h5 class="card-subtitle">Vue d'ensemble de tous les commits sur nos projets</h5>
                                    </div>
                                </div>
                                </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th>Plateforme</th>
                                            <th>Répo</th>
                                            <th>Branche</th>
                                            <th>Titre du Commit</th>
                                            <th>Nom de l'utilisateur</th>
                                            <th>Photo de profil</th>
                                            <th>Date du Commit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        // Create connection
                                        $mysqli = new mysqli("localhost", "unisteal_admin", "RageSCPjump5", "unisteal_commit");


                                        // Perform a query to fetch data from your commits table
                                        $sql = "SELECT plateforme, repo, SUBSTRING_INDEX(branch, 'refs/heads/', -1) as branch, commit_title, user_name, user_pp, commit_date FROM commits";
                                        $result = $mysqli->query($sql);

                                        // Check if there are any rows returned
                                        if ($result->num_rows > 0) {
                                            // Fetch all rows from the result set
                                            $rows = $result->fetch_all(MYSQLI_ASSOC);
                                            
                                            // Sort the rows based on commit_date in descending order
                                            usort($rows, function($a, $b) {
                                                return strtotime($b['commit_date']) - strtotime($a['commit_date']);
                                            });

                                            // Output the sorted rows
                                            foreach ($rows as $row) {
                                                echo "<tr>";
                                                if ($row["plateforme"] == "GitHub") {
                                                    echo "<td><img src='images/github.png' width='40' height='40'></td>";
                                                } elseif ($row["plateforme"] == "GitLab") {
                                                    echo "<td><img src='images/gitlab.webp' width='40' height='40'></td>";
                                                } else {
                                                    echo "<td>" . $row["plateforme"] . "</td>";
                                                }
                                                echo "<td>" . $row["repo"] . "</td>";
                                                echo "<td>" . $row["branch"] . "</td>";
                                                echo "<td>" . $row["commit_title"] . "</td>";
                                                if ($row["user_name"] == "CamoLover") {
                                                    echo "<td><p>Evan E</p></td>";
                                                } else {
                                                    echo "<td>" . $row["user_name"] . "</td>";
                                                }
                                                echo "<td><img src='" . $row["user_pp"] . "' width='40' height='40'></td>";
                                                echo "<td>" . $row["commit_date"] . "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='7'>No commits available.</td></tr>";
                                        }

                                        // Close the result set
                                        $result->close();

                                        // Close database connection
                                        $mysqli->close();
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
