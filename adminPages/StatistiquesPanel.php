<?php

use classes\StatistiqueGlobal;

require_once '../middlewares/AdminAccess.php';
require_once '../classes/StatistiqueGlobal.php';
require_once '../classes/Database.php';
session_start();
AdminAcess();


$statistiqueModel = new StatistiqueGlobal();
$TotalCourses = $statistiqueModel->Nombre_total_cours();
$totalUtilisateurs = $statistiqueModel->Nombre_total_utilisateurs();
$totalInscriptions = $statistiqueModel->Nombre_total_Inscriptions();
$totalCategories = $statistiqueModel->Nombre_total_Categories();
$totalTags = $statistiqueModel->Nombre_total_Tags();
$repartitionParCategorie = $statistiqueModel->repartitionParCategorie();
$CoursPlusEtudinat = $statistiqueModel->CoursPlusEtudinat();

if (isset($_GET['category_id'])) {

    $categoryCourses = $statistiqueModel->CategoryCourses($_GET['category_id']);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>YouDemy - Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="../../assets/img/ycd.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/dashboard.css">
    <style>
        /* Enhanced Stats Cards Styling */
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.08);
            height: 100%;
            margin-bottom: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .stat-card i {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .stat-card h3 {
            font-size: 2rem;
            font-weight: 700;
            margin: 0.5rem 0;
            background: linear-gradient(45deg, #0156FF, #0091ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .stat-card p {
            color: #666;
            font-size: 1rem;
            margin: 0;
        }

        /* Icon specific backgrounds */
        .stat-card .fa-user-friends {
            background: rgba(1, 86, 255, 0.1);
            color: #0156FF;
        }

        .stat-card .fa-book {
            background: rgba(76, 175, 80, 0.1);
            color: #4CAF50;
        }

        .stat-card .fa-calendar-check {
            background: rgba(255, 152, 0, 0.1);
            color: #FF9800;
        }

        .stat-card .fa-list {
            background: rgba(156, 39, 176, 0.1);
            color: #9C27B0;
        }

        .stat-card .fa-tags {
            background: rgba(255, 87, 34, 0.1);
            color: #FF5722;
        }

        /* Animation */
        @keyframes countUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: countUp 0.5s ease-out forwards;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h3><i class="fa fa-book-reader mr-2"></i>YouDemy</h3>
        </div>
        <div class="sidebar-menu">
            <a href="./StatistiquesPanel.php" class="menu-item active"><i
                    class="fas fa-tachometer-alt"></i>Dashboard</a>
            <a href="./UtilisateursPanel.php" class="menu-item"><i class="fas fa-users"></i>Utilisateurs</a>
            <a href="./CoursesPanel.php" class="menu-item"><i class="fas fa-graduation-cap"></i>Cours</a>
            <a href="./TagsPanel.php" class="menu-item"><i class="fas fa-tags"></i>Tags</a>
            <a href="./CategoryPanel.php" class="menu-item"><i class="fas fa-list"></i>Categories</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Top Bar -->
        <div class="top-bar d-flex justify-content-between align-items-center">
            <button class="btn btn-link d-md-none" id="sidebarToggle">
                <i class="fas fa-bars"></i>
            </button>
            <div class="user-profile">
                <?php if (isset($_SESSION['utilisateur'])): ?>
                    <span><?php echo $_SESSION['utilisateur']['nom']; ?></span>
                <?php else: ?>
                    <span>Admin User</span>
                <?php endif; ?>
            </div>
            <a href="../actions/lougout.php"
                style="text-decoration: none;color: black;font-weight: bold;border-radius: 5px;padding: 5px 10px;background-color:rgb(1, 86, 255);"><i
                    class="
                fas fa-sign-out-alt" style="color: white;"></i></a>
        </div>

        <!-- Stats Cards -->
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="stat-card">
                    <i class="fas fa-user-friends"></i>
                    <h3><?= $totalUtilisateurs ?></h3>
                    <p>Utilisateurs Total</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="stat-card">
                    <i class="fas fa-book"></i>
                    <h3><?= $TotalCourses ?></h3>
                    <p>Cours Total</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="stat-card">
                    <i class="fas fa-calendar-check"></i>
                    <h3><?= $totalInscriptions ?></h3>
                    <p>Inscriptions total</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="stat-card">
                    <i class="fas fa-list"></i>
                    <h3><?= $totalCategories ?></h3>
                    <p>Categories Total</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="stat-card">
                    <i class="fas fa-tags"></i>
                    <h3><?= $totalTags ?></h3>
                    <p>Total Mots-Clé</p>
                </div>
            </div>
        </div>


        <div class="p-3 bg-white rounded shadow-sm d-flex align-items-center justify-content-between mt-4"
            style="width: 83%;margin: auto;">
            <h4 class="d-inline-block text-muted mb-0"><span
                    class="animate-in text-primary"><?= $CoursPlusEtudinat['titre_cour'] ?></span> est le cours le plus
                étudiants:
            </h4>
            <h3 class="d-inline-block  text-primary ml-2 mb-0"><?= $CoursPlusEtudinat['total'] ?></h3>
        </div>



        <div class="recent-activity mt-4">
            <h4 class="mb-4">Répartition par catégorie</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <td>nom de category</td>
                            <td>nombre de courses</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($repartitionParCategorie as $category): ?>

                            <tr>
                                <td><?= $category['category_name'] ?></td>
                                <td><a href="?category_id=<?= $category['id_category'] ?>"><?= $category['totalCour'] ?></a>
                                </td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <?php if (isset($_GET['category_id'])): ?>
            <div class="recent-activity">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="mb-0">Liste des étudiants inscrits au
                        <span class="text-primary">
                            <?= $categoryCourses[0]['category_name'] ?>
                        </span>
                    </h4>
                    <button type="button" class="btn btn-primary" style="margin-left: 10px;"
                        onclick="window.location.href = window.location.href.split('?')[0]"><i class="fa fa-eye-slash"></i>
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titre du cours</th>
                                <th>Enseignant</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categoryCourses as $course): ?>
                                <tr>
                                    <td><?= $course['id_cour']; ?></td>
                                    <td><?= $course['titre_cour']; ?></td>
                                    <td><?= $course['nom']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php else: ?>
            <div></div>
        <?php endif; ?>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <script>
      
        </script>
</body>

</html>