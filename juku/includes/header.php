<?php
$page_title = $page_title ?? 'AI×学習塾経営 | AI Tech Stack';
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
            background: linear-gradient(135deg, #4f46e5 0%, #818cf8 100%);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="gradient-header text-white shadow-lg sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="../index.php" class="text-sm text-indigo-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×学習塾経営</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-indigo-200 <?php echo $current_page === 'home' ? 'text-indigo-200' : ''; ?>">ホーム</a>
                    <a href="ai-juku-intro.php" class="hover:text-indigo-200 <?php echo $current_page === 'intro' ? 'text-indigo-200' : ''; ?>">はじめに</a>
                    <a href="sns-marketing.php" class="hover:text-indigo-200 <?php echo $current_page === 'marketing' ? 'text-indigo-200' : ''; ?>">集客</a>
                    <a href="curriculum-design.php" class="hover:text-indigo-200 <?php echo $current_page === 'teaching' ? 'text-indigo-200' : ''; ?>">教務</a>
                    <a href="parent-communication.php" class="hover:text-indigo-200 <?php echo $current_page === 'practice' ? 'text-indigo-200' : ''; ?>">業務効率化</a>
                    <a href="glossary.php" class="hover:text-indigo-200 <?php echo $current_page === 'support' ? 'text-indigo-200' : ''; ?>">用語集</a>
                </div>
                <button class="md:hidden" id="menu-toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="md:hidden hidden mt-4 space-y-2" id="mobile-menu">
                <a href="../index.php" class="block py-2 hover:text-indigo-200">← Dojo Top</a>
                <a href="index.php" class="block py-2 hover:text-indigo-200">ホーム</a>
                <a href="ai-juku-intro.php" class="block py-2 hover:text-indigo-200">はじめに</a>
                <a href="sns-marketing.php" class="block py-2 hover:text-indigo-200">集客</a>
                <a href="curriculum-design.php" class="block py-2 hover:text-indigo-200">教務</a>
                <a href="parent-communication.php" class="block py-2 hover:text-indigo-200">業務効率化</a>
                <a href="glossary.php" class="block py-2 hover:text-indigo-200">用語集</a>
            </div>
        </nav>
    </header>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
