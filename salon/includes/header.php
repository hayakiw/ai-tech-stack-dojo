<?php
$page_title = $page_title ?? 'AI×美容院経営 | AI Tech Stack';
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
            background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #8b5cf6 0%, #a78bfa 100%);
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
                    <a href="../index.php" class="text-sm text-violet-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×美容院経営</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-violet-200 <?php echo $current_page === 'home' ? 'text-violet-200' : ''; ?>">ホーム</a>
                    <a href="ai-salon-intro.php" class="hover:text-violet-200 <?php echo $current_page === 'basics' ? 'text-violet-200' : ''; ?>">基礎知識</a>
                    <a href="sns-marketing.php" class="hover:text-violet-200 <?php echo $current_page === 'ai-tools' ? 'text-violet-200' : ''; ?>">集客</a>
                    <a href="counseling.php" class="hover:text-violet-200 <?php echo $current_page === 'practice' ? 'text-violet-200' : ''; ?>">実践</a>
                    <a href="glossary.php" class="hover:text-violet-200 <?php echo $current_page === 'support' ? 'text-violet-200' : ''; ?>">用語集</a>
                </div>
                <button class="md:hidden" id="menu-toggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="md:hidden hidden mt-4 space-y-2" id="mobile-menu">
                <a href="index.php" class="block py-2 hover:text-violet-200">ホーム</a>
                <a href="ai-salon-intro.php" class="block py-2 hover:text-violet-200">基礎知識</a>
                <a href="sns-marketing.php" class="block py-2 hover:text-violet-200">集客</a>
                <a href="counseling.php" class="block py-2 hover:text-violet-200">実践</a>
                <a href="glossary.php" class="block py-2 hover:text-violet-200">用語集</a>
            </div>
        </nav>
    </header>
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
