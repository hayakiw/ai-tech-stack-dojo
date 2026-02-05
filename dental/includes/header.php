<?php
$page_title = $page_title ?? 'AI×歯科医院経営 | AI Tech Stack';
$current_page = $current_page ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include '../includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-header {
            background: linear-gradient(135deg, #0891b2 0%, #22d3d1 100%);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="gradient-header text-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="../index.php" class="text-sm text-cyan-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×歯科医院経営</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-cyan-200 <?php echo $current_page === 'home' ? 'text-cyan-200' : ''; ?>">ホーム</a>
                    <a href="ai-dental-intro.php" class="hover:text-cyan-200 <?php echo $current_page === 'intro' ? 'text-cyan-200' : ''; ?>">はじめに</a>
                    <a href="sns-marketing.php" class="hover:text-cyan-200 <?php echo $current_page === 'marketing' ? 'text-cyan-200' : ''; ?>">集客</a>
                    <a href="patient-communication.php" class="hover:text-cyan-200 <?php echo $current_page === 'patient' ? 'text-cyan-200' : ''; ?>">患者対応</a>
                    <a href="appointment-management.php" class="hover:text-cyan-200 <?php echo $current_page === 'practice' ? 'text-cyan-200' : ''; ?>">業務効率化</a>
                    <a href="glossary.php" class="hover:text-cyan-200 <?php echo $current_page === 'support' ? 'text-cyan-200' : ''; ?>">用語集</a>
                </div>
                <button class="md:hidden" id="menu-toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="md:hidden hidden mt-4 space-y-2" id="mobile-menu">
                <a href="../index.php" class="block py-2 hover:text-cyan-200">← Dojo Top</a>
                <a href="index.php" class="block py-2 hover:text-cyan-200">ホーム</a>
                <a href="ai-dental-intro.php" class="block py-2 hover:text-cyan-200">はじめに</a>
                <a href="sns-marketing.php" class="block py-2 hover:text-cyan-200">集客</a>
                <a href="patient-communication.php" class="block py-2 hover:text-cyan-200">患者対応</a>
                <a href="appointment-management.php" class="block py-2 hover:text-cyan-200">業務効率化</a>
                <a href="glossary.php" class="block py-2 hover:text-cyan-200">用語集</a>
            </div>
        </nav>
    </header>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
