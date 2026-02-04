<?php
$page_title = $page_title ?? 'AI×デザイン | AI Tech Stack';
$current_page = $current_page ?? '';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #d946ef 0%, #ec4899 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #d946ef 0%, #ec4899 100%);
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
                    <a href="../index.php" class="text-sm text-orange-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×デザイン</a>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-pink-200 transition">ホーム</a>
                    <a href="design-basics.php" class="hover:text-pink-200 transition">基礎から学ぶ</a>
                    <a href="../" class="hover:text-pink-200 transition">他のコース</a>
                </div>
                <button class="md:hidden" id="menu-btn">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div class="md:hidden hidden mt-4 space-y-2" id="mobile-menu">
                <a href="index.php" class="block py-2 hover:text-pink-200">ホーム</a>
                <a href="design-basics.php" class="block py-2 hover:text-pink-200">基礎から学ぶ</a>
                <a href="../" class="block py-2 hover:text-pink-200">他のコース</a>
            </div>
        </nav>
    </header>
    <script>
        document.getElementById('menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
