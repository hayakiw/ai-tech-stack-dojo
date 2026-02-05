<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-header {
            background: linear-gradient(135deg, #65a30d 0%, #84cc16 100%);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <header class="gradient-header text-white shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <a href="../index.php" class="text-sm text-lime-200 hover:text-white">← Dojo Top</a>
                    <a href="index.php" class="text-2xl font-bold">AI×せどり・転売</a>
                </div>
                <nav class="hidden md:flex space-x-6">
                    <a href="index.php" class="hover:text-lime-200 transition <?php echo $current_page === 'home' ? 'border-b-2 border-white' : ''; ?>">ホーム</a>
                    <a href="ai-resale-intro.php" class="hover:text-lime-200 transition <?php echo $current_page === 'intro' ? 'border-b-2 border-white' : ''; ?>">AI基礎</a>
                    <a href="product-research.php" class="hover:text-lime-200 transition <?php echo $current_page === 'research' ? 'border-b-2 border-white' : ''; ?>">リサーチ</a>
                    <a href="listing-strategy.php" class="hover:text-lime-200 transition <?php echo $current_page === 'sales' ? 'border-b-2 border-white' : ''; ?>">販売</a>
                    <a href="scaling.php" class="hover:text-lime-200 transition <?php echo $current_page === 'operation' ? 'border-b-2 border-white' : ''; ?>">運営</a>
                </nav>
            </div>
        </div>
    </header>
