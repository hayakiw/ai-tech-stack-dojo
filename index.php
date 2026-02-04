<?php
$page_title = 'AI Tech Stack Dojo - AIと学ぶプログラミング＆マーケティング';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'includes/meta.php'; ?>
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .gradient-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #312e81 100%);
        }
        .card-webdev {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .card-marketing {
            background: linear-gradient(135deg, #0d9488 0%, #0891b2 100%);
        }
        .hover-scale {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-scale:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- ヒーローセクション -->
    <section class="gradient-hero text-white py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">AI Tech Stack Dojo</h1>
            <p class="text-xl md:text-2xl mb-4 opacity-90">AIと一緒に学ぶ、実践的なスキル習得サイト</p>
            <p class="text-lg opacity-75 mb-8">完全初心者から、AIを活用したWeb開発・マーケティングを習得</p>
            <div class="flex flex-wrap justify-center gap-4">
                <span class="bg-white/20 px-4 py-2 rounded-full">ChatGPT / Claude</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">Web開発</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">マーケティング</span>
                <span class="bg-white/20 px-4 py-2 rounded-full">実践重視</span>
            </div>
        </div>
    </section>

    <!-- コース選択 -->
    <section class="py-20 -mt-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <!-- Web開発コース -->
                <a href="webdev/" class="block hover-scale">
                    <div class="card-webdev text-white rounded-2xl overflow-hidden shadow-xl">
                        <div class="p-8">
                            <div class="text-6xl mb-4">💻</div>
                            <h2 class="text-3xl font-bold mb-4">AI×Web開発</h2>
                            <p class="text-lg opacity-90 mb-6">AIを活用したモダンなWeb開発を基礎から実践まで学ぶ</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    HTML/CSS/JavaScript基礎
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    Next.js / FastAPI
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    AIコーディング（Claude Code / Cursor）
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-8 py-4 flex justify-between items-center">
                            <span class="font-bold">初級〜上級 / 80レッスン</span>
                            <span class="bg-white text-purple-600 px-4 py-2 rounded-full font-bold text-sm">始める →</span>
                        </div>
                    </div>
                </a>

                <!-- マーケティングコース -->
                <a href="marketing/" class="block hover-scale">
                    <div class="card-marketing text-white rounded-2xl overflow-hidden shadow-xl">
                        <div class="p-8">
                            <div class="text-6xl mb-4">📊</div>
                            <h2 class="text-3xl font-bold mb-4">AI×マーケティング</h2>
                            <p class="text-lg opacity-90 mb-6">AIを活用したマーケティングの基礎と実践テクニック</p>
                            <div class="space-y-2 text-sm opacity-80">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    マーケティングの基礎知識
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    SNS・SEO・広告×AI
                                </div>
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                    プロンプト術・コピーライティング
                                </div>
                            </div>
                        </div>
                        <div class="bg-white/20 px-8 py-4 flex justify-between items-center">
                            <span class="font-bold">初心者向け / 16レッスン</span>
                            <span class="bg-white text-teal-600 px-4 py-2 rounded-full font-bold text-sm">始める →</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- 特徴 -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">AI Tech Stack Dojoの特徴</h2>
            <div class="grid md:grid-cols-4 gap-8 max-w-5xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="font-bold mb-2">AI活用が前提</h3>
                    <p class="text-sm text-gray-600">ChatGPTやClaudeを使った実践的な学習</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">📱</div>
                    <h3 class="font-bold mb-2">初心者でも安心</h3>
                    <p class="text-sm text-gray-600">専門知識ゼロから始められる丁寧な解説</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">🎯</div>
                    <h3 class="font-bold mb-2">実践重視</h3>
                    <p class="text-sm text-gray-600">すぐに使えるプロンプトやコード例を提供</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl mb-4">🆓</div>
                    <h3 class="font-bold mb-2">完全無料</h3>
                    <p class="text-sm text-gray-600">すべてのコンテンツを無料で学習可能</p>
                </div>
            </div>
        </div>
    </section>

    <!-- こんな方におすすめ -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">こんな方におすすめ</h2>
            <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">プログラミング初心者</h3>
                        <p class="text-sm text-gray-600">AIの力を借りて、効率よくプログラミングを習得したい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">マーケティング担当者</h3>
                        <p class="text-sm text-gray-600">AIを活用して業務効率を上げたい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">個人事業主・フリーランス</h3>
                        <p class="text-sm text-gray-600">一人でWeb制作からマーケティングまでこなしたい方</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-lg shadow flex items-start">
                    <div class="text-green-500 text-2xl mr-4">✓</div>
                    <div>
                        <h3 class="font-bold mb-1">AIに興味がある方</h3>
                        <p class="text-sm text-gray-600">ChatGPTやClaudeを実務で活かしたい方</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 gradient-hero text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">さあ、始めましょう</h2>
            <p class="text-xl mb-8 opacity-90">AIと一緒に、新しいスキルを身につけよう</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="webdev/" class="inline-block bg-purple-500 hover:bg-purple-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition">
                    Web開発を学ぶ
                </a>
                <a href="marketing/" class="inline-block bg-teal-500 hover:bg-teal-600 text-white px-8 py-4 rounded-lg font-bold text-lg transition">
                    マーケティングを学ぶ
                </a>
            </div>
        </div>
    </section>

    <!-- フッター -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-xl font-bold mb-4 md:mb-0">AI Tech Stack Dojo</div>
                <div class="flex space-x-6">
                    <a href="webdev/" class="hover:text-gray-300">Web開発コース</a>
                    <a href="marketing/" class="hover:text-gray-300">マーケティングコース</a>
                </div>
            </div>
            <div class="text-center mt-8 text-gray-400">
                <p>AIと一緒に学ぶ、実践的なスキル習得サイト</p>
            </div>
        </div>
    </footer>
</body>
</html>
