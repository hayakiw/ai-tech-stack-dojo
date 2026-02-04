<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'includes/meta.php'; ?>
    <title>AI×Web開発 学習サイト | AI Tech Stack</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 50%, #312e81 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <!-- ヒーローセクション -->
    <section class="gradient-bg min-h-screen flex items-center">
        <div class="container mx-auto px-6 py-20">
            <div class="text-center max-w-4xl mx-auto">
                <div class="text-blue-400 text-lg mb-4">Claude Code / Cursor で学ぶ</div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6">
                    AI×Web開発<br>学習サイト
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 mb-8">
                    AIと一緒にWebアプリを作りながら<br class="md:hidden">プログラミングを学ぼう
                </p>
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm">Next.js</span>
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm">FastAPI</span>
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm">MySQL</span>
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm">Docker</span>
                    <span class="bg-white/10 px-4 py-2 rounded-full text-sm">TypeScript</span>
                </div>
                <a href="#courses" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-blue-700 transition">
                    コースを選ぶ
                </a>
            </div>
        </div>
    </section>

    <!-- コース一覧 -->
    <section id="courses" class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-4">学習コース</h2>
            <p class="text-gray-400 text-center mb-12">レベルに合わせてコースを選択してください</p>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- 初級編 -->
                <a href="01_beginner/index.php" class="block">
                    <div class="bg-gradient-to-br from-green-600 to-green-800 rounded-2xl p-8 card-hover h-full">
                        <div class="text-6xl mb-4">🌱</div>
                        <div class="text-green-200 text-sm font-bold mb-2">BEGINNER</div>
                        <h3 class="text-2xl font-bold mb-4">初級編</h3>
                        <p class="text-green-100 mb-6">プログラミング未経験からスタート。AIツールの使い方と基礎知識を学びます。</p>
                        <div class="space-y-2 text-sm text-green-200">
                            <p>✓ HTML/CSS/JavaScript基礎</p>
                            <p>✓ Python/FastAPI基礎</p>
                            <p>✓ Next.js基礎</p>
                            <p>✓ Claude Code/Cursorの使い方</p>
                            <p>✓ Todoアプリ作成</p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-green-500">
                            <span class="text-green-200 text-sm">20ステップ</span>
                        </div>
                    </div>
                </a>

                <!-- 中級編 -->
                <a href="02_intermediate/index.php" class="block">
                    <div class="bg-gradient-to-br from-blue-600 to-indigo-800 rounded-2xl p-8 card-hover h-full">
                        <div class="text-6xl mb-4">🚀</div>
                        <div class="text-blue-200 text-sm font-bold mb-2">INTERMEDIATE</div>
                        <h3 class="text-2xl font-bold mb-4">中級編</h3>
                        <p class="text-blue-100 mb-6">本格的なアプリ開発に挑戦。Docker、MySQL、認証機能を学びます。</p>
                        <div class="space-y-2 text-sm text-blue-200">
                            <p>✓ アプリケーション設計</p>
                            <p>✓ Docker/Docker Compose</p>
                            <p>✓ MySQL + SQLAlchemy</p>
                            <p>✓ JWT認証</p>
                            <p>✓ ブログアプリ作成</p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-blue-500">
                            <span class="text-blue-200 text-sm">24ステップ</span>
                        </div>
                    </div>
                </a>

                <!-- 上級編 -->
                <a href="03_advanced/index.php" class="block">
                    <div class="bg-gradient-to-br from-red-600 to-orange-700 rounded-2xl p-8 card-hover h-full">
                        <div class="text-6xl mb-4">🔥</div>
                        <div class="text-orange-200 text-sm font-bold mb-2">ADVANCED</div>
                        <h3 class="text-2xl font-bold mb-4">上級編</h3>
                        <p class="text-orange-100 mb-6">AIをパートナーとして複雑なプロジェクトを効率的に進める技術を習得します。</p>
                        <div class="space-y-2 text-sm text-orange-200">
                            <p>✓ AIエージェント活用</p>
                            <p>✓ MCP連携・カスタムMCP作成</p>
                            <p>✓ CI/CD・DevOps</p>
                            <p>✓ チーム開発でのAI活用</p>
                            <p>✓ プロジェクト管理ツール作成</p>
                        </div>
                        <div class="mt-6 pt-4 border-t border-orange-500">
                            <span class="text-orange-200 text-sm">36ステップ</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 学習の流れ -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">学習の流れ</h2>

            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row items-center justify-between">
                    <div class="text-center mb-8 md:mb-0">
                        <div class="w-20 h-20 bg-green-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4">1</div>
                        <h3 class="font-bold mb-2">基礎を学ぶ</h3>
                        <p class="text-gray-400 text-sm">初級編で基礎知識と<br>AIツールの使い方を習得</p>
                    </div>
                    <div class="hidden md:block text-4xl text-gray-600">→</div>
                    <div class="text-center mb-8 md:mb-0">
                        <div class="w-20 h-20 bg-blue-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4">2</div>
                        <h3 class="font-bold mb-2">実践で深める</h3>
                        <p class="text-gray-400 text-sm">中級編で本格的な<br>アプリ開発を経験</p>
                    </div>
                    <div class="hidden md:block text-4xl text-gray-600">→</div>
                    <div class="text-center">
                        <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center text-3xl mx-auto mb-4">3</div>
                        <h3 class="font-bold mb-2">プロへ</h3>
                        <p class="text-gray-400 text-sm">上級編でAI駆動開発の<br>高度な技術を習得</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 特徴 -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">このサイトの特徴</h2>

            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="text-5xl mb-4">🤖</div>
                    <h3 class="text-xl font-bold mb-3">AI駆動の学習</h3>
                    <p class="text-gray-400">Claude CodeやCursorを使って、AIと対話しながらコードを書く方法を学びます。</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl mb-4">🛠️</div>
                    <h3 class="text-xl font-bold mb-3">実践重視</h3>
                    <p class="text-gray-400">理論だけでなく、実際にアプリを作りながら学ぶことで確実にスキルが身につきます。</p>
                </div>
                <div class="text-center">
                    <div class="text-5xl mb-4">📈</div>
                    <h3 class="text-xl font-bold mb-3">段階的な成長</h3>
                    <p class="text-gray-400">初級から上級まで、段階的にスキルアップできるカリキュラム設計。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 技術スタック -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl font-bold text-center mb-12">学べる技術</h2>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 max-w-4xl mx-auto">
                <div class="bg-gray-800 p-6 rounded-lg text-center">
                    <div class="text-3xl mb-2">⚛️</div>
                    <p class="font-bold">Next.js</p>
                    <p class="text-xs text-gray-400">React フレームワーク</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg text-center">
                    <div class="text-3xl mb-2">⚡</div>
                    <p class="font-bold">FastAPI</p>
                    <p class="text-xs text-gray-400">Python Web API</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg text-center">
                    <div class="text-3xl mb-2">🐬</div>
                    <p class="font-bold">MySQL</p>
                    <p class="text-xs text-gray-400">データベース</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg text-center">
                    <div class="text-3xl mb-2">🐳</div>
                    <p class="font-bold">Docker</p>
                    <p class="text-xs text-gray-400">コンテナ技術</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg text-center">
                    <div class="text-3xl mb-2">📘</div>
                    <p class="font-bold">TypeScript</p>
                    <p class="text-xs text-gray-400">型付きJavaScript</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg text-center">
                    <div class="text-3xl mb-2">🎨</div>
                    <p class="font-bold">Tailwind CSS</p>
                    <p class="text-xs text-gray-400">CSSフレームワーク</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg text-center">
                    <div class="text-3xl mb-2">🔐</div>
                    <p class="font-bold">JWT認証</p>
                    <p class="text-xs text-gray-400">セキュリティ</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg text-center">
                    <div class="text-3xl mb-2">☁️</div>
                    <p class="font-bold">Vercel/Railway</p>
                    <p class="text-xs text-gray-400">デプロイ</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 gradient-bg">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold mb-6">さあ、始めよう</h2>
            <p class="text-xl text-gray-300 mb-8">AIと一緒に、Webアプリ開発の世界へ</p>
            <a href="01_beginner/index.php" class="inline-block bg-white text-gray-900 px-8 py-4 rounded-lg font-bold text-lg hover:bg-gray-100 transition">
                初級編から始める
            </a>
        </div>
    </section>

    <!-- フッター -->
    <footer class="bg-gray-900 py-8 border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-xl font-bold mb-4 md:mb-0">AI×Web開発 学習サイト</div>
                <div class="flex space-x-6">
                    <a href="01_beginner/index.php" class="text-gray-400 hover:text-white">初級編</a>
                    <a href="02_intermediate/index.php" class="text-gray-400 hover:text-white">中級編</a>
                    <a href="03_advanced/index.php" class="text-gray-400 hover:text-white">上級編</a>
                </div>
            </div>
            <div class="text-center mt-8 text-gray-500 text-sm">
                <p>AIでWebアプリ開発を学ぼう</p>
            </div>
        </div>
    </footer>
</body>
</html>
