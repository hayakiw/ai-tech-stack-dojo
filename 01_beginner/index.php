<?php
$page_title = 'AIでWebアプリ開発を学ぼう | AI Tech Stack';
$current_page = 'home';
$extra_styles = '';

include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">AIでWebアプリ開発を学ぼう</h1>
            <p class="text-xl md:text-2xl mb-8 opacity-90">完全初心者から、Next.js + FastAPI でアプリが作れるようになる</p>
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <span class="bg-white/20 px-4 py-2 rounded-full">Claude Code</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">Cursor</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">Next.js</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">FastAPI</span>
            </div>
            <a href="web-basics.php" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">学習を始める</a>
        </div>
    </section>

    <!-- このサイトで学べること -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">このサイトで学べること</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">1</div>
                    <h3 class="text-xl font-bold mb-3">Web開発の基礎知識</h3>
                    <p class="text-gray-600">HTML、CSS、JavaScript、Pythonの基礎を学び、コードが読めるようになります</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">2</div>
                    <h3 class="text-xl font-bold mb-3">AIツールの使い方</h3>
                    <p class="text-gray-600">Claude CodeとCursorを使って、効率的に開発する方法を習得します</p>
                </div>
                <div class="text-center p-6 rounded-lg bg-gray-50">
                    <div class="text-4xl mb-4">3</div>
                    <h3 class="text-xl font-bold mb-3">実践的なアプリ開発</h3>
                    <p class="text-gray-600">Next.js + FastAPIでTodoアプリを作りながら、実践スキルを身につけます</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 学習ロードマップ -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">学習ロードマップ</h2>

            <!-- 第1部 -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-6 text-purple-600">第1部：Web開発の基礎知識</h3>
                <div class="grid md:grid-cols-3 lg:grid-cols-6 gap-4">
                    <a href="web-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 1</div>
                        <div class="font-bold">Webの仕組み</div>
                    </a>
                    <a href="html-css-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 2</div>
                        <div class="font-bold">HTML/CSS基礎</div>
                    </a>
                    <a href="js-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 3</div>
                        <div class="font-bold">JavaScript基礎</div>
                    </a>
                    <a href="python-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 4</div>
                        <div class="font-bold">Python基礎</div>
                    </a>
                    <a href="nextjs-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 5</div>
                        <div class="font-bold">React/Next.js基礎</div>
                    </a>
                    <a href="fastapi-basics.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 6</div>
                        <div class="font-bold">FastAPI基礎</div>
                    </a>
                </div>
            </div>

            <!-- 第2部 -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-6 text-blue-600">第2部：開発環境とAIツール</h3>
                <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <a href="setup.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 7</div>
                        <div class="font-bold">開発環境の準備</div>
                    </a>
                    <a href="claude-code.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 8</div>
                        <div class="font-bold">Claude Code</div>
                    </a>
                    <a href="cursor.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 9</div>
                        <div class="font-bold">Cursor</div>
                    </a>
                    <a href="prompting.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 10</div>
                        <div class="font-bold">AIへの指示の出し方</div>
                    </a>
                    <a href="dev-flow.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 11</div>
                        <div class="font-bold">AIとの開発フロー</div>
                    </a>
                </div>
            </div>

            <!-- 第3部 -->
            <div class="mb-12">
                <h3 class="text-xl font-bold mb-6 text-green-600">第3部：実践チュートリアル</h3>
                <div class="grid md:grid-cols-3 lg:grid-cols-5 gap-4">
                    <a href="tutorial-setup.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 12</div>
                        <div class="font-bold">チュートリアル準備</div>
                    </a>
                    <a href="tutorial-counter.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 13</div>
                        <div class="font-bold">カウンターアプリ</div>
                    </a>
                    <a href="tutorial-todo-backend.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 14</div>
                        <div class="font-bold">Todo - バックエンド</div>
                    </a>
                    <a href="tutorial-todo-frontend.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 15</div>
                        <div class="font-bold">Todo - フロントエンド</div>
                    </a>
                    <a href="tutorial-todo-integration.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="text-sm text-gray-500 mb-1">Step 16</div>
                        <div class="font-bold">Todo - 連携</div>
                    </a>
                </div>
            </div>

            <!-- 第4部 -->
            <div>
                <h3 class="text-xl font-bold mb-6 text-orange-600">第4部：サポート</h3>
                <div class="grid md:grid-cols-3 gap-4">
                    <a href="errors.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="font-bold">よくあるエラー集</div>
                        <p class="text-sm text-gray-500 mt-1">トラブルシューティング</p>
                    </a>
                    <a href="next-steps.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="font-bold">次のステップ</div>
                        <p class="text-sm text-gray-500 mt-1">さらなる学習リソース</p>
                    </a>
                    <a href="glossary.php" class="block p-4 bg-white rounded-lg shadow hover:shadow-md transition">
                        <div class="font-bold">用語集</div>
                        <p class="text-sm text-gray-500 mt-1">よく出てくる用語の解説</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 対象者 -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">こんな方におすすめ</h2>
            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">プログラミング完全初心者</h3>
                        <p class="text-gray-600">コードを見たことがない方でも大丈夫。基礎から丁寧に解説します</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">AIを活用して開発したい方</h3>
                        <p class="text-gray-600">Claude CodeやCursorを使った効率的な開発方法を学べます</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">Webアプリを作ってみたい方</h3>
                        <p class="text-gray-600">フロントエンドとバックエンド両方を学び、本格的なアプリを作れます</p>
                    </div>
                </div>
                <div class="flex items-start space-x-4">
                    <div class="text-green-500 text-2xl">○</div>
                    <div>
                        <h3 class="font-bold mb-2">挫折経験がある方</h3>
                        <p class="text-gray-600">AIのサポートがあるので、一人で悩むことなく進められます</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">さあ、始めましょう</h2>
            <p class="text-xl mb-8 opacity-90">AIと一緒に、あなただけのWebアプリを作りましょう</p>
            <a href="web-basics.php" class="inline-block bg-white text-purple-600 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">Step 1: Webの仕組みを学ぶ</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
