<?php
$page_title = $page_title ?? 'AI×副業・フリーランス | AI Tech Stack';
$current_page = $current_page ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include '../includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #e11d48 0%, #f43f5e 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #e11d48 0%, #f43f5e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="gradient-bg text-white shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="../index.php" class="text-sm text-rose-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×副業・フリーランス</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-rose-200 <?php echo $current_page === 'home' ? 'text-rose-200' : ''; ?>">ホーム</a>
                    <a href="sidejob-basics.php" class="hover:text-rose-200 <?php echo $current_page === 'basics' ? 'text-rose-200' : ''; ?>">基礎知識</a>
                    <a href="ai-skills.php" class="hover:text-rose-200 <?php echo $current_page === 'ai-tools' ? 'text-rose-200' : ''; ?>">AIスキル</a>
                    <a href="client-acquisition.php" class="hover:text-rose-200 <?php echo $current_page === 'practice' ? 'text-rose-200' : ''; ?>">実践</a>
                    <a href="glossary.php" class="hover:text-rose-200 <?php echo $current_page === 'support' ? 'text-rose-200' : ''; ?>">用語集</a>
                </div>
                <button class="md:hidden" id="menu-toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="md:hidden hidden mt-4 space-y-2" id="mobile-menu">
                <a href="index.php" class="block py-2 hover:text-rose-200">ホーム</a>
                <a href="sidejob-basics.php" class="block py-2 hover:text-rose-200">基礎知識</a>
                <a href="ai-skills.php" class="block py-2 hover:text-rose-200">AIスキル</a>
                <a href="client-acquisition.php" class="block py-2 hover:text-rose-200">実践</a>
                <a href="glossary.php" class="block py-2 hover:text-rose-200">用語集</a>
            </div>
        </nav>
    </header>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
