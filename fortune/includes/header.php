<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-header {
            background: linear-gradient(135deg, #9333ea 0%, #c084fc 100%);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="gradient-header text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <a href="../index.php" class="text-sm text-purple-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×占い・スピリチュアル</a>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-purple-200 transition <?php echo $current_page === 'home' ? 'border-b-2 border-white' : ''; ?>">ホーム</a>
                    <a href="ai-fortune-intro.php" class="hover:text-purple-200 transition <?php echo $current_page === 'intro' ? 'border-b-2 border-white' : ''; ?>">AI基礎</a>
                    <a href="sns-marketing.php" class="hover:text-purple-200 transition <?php echo $current_page === 'marketing' ? 'border-b-2 border-white' : ''; ?>">集客</a>
                    <a href="reading-creation.php" class="hover:text-purple-200 transition <?php echo $current_page === 'service' ? 'border-b-2 border-white' : ''; ?>">鑑定</a>
                    <a href="scaling.php" class="hover:text-purple-200 transition <?php echo $current_page === 'operation' ? 'border-b-2 border-white' : ''; ?>">運営</a>
                </nav>
            </div>
        </div>
    </header>
