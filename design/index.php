<?php
$page_title = 'AI×デザイン | AI Tech Stack';
$current_page = 'home';
include 'includes/header.php';
?>

    <!-- ヒーローセクション -->
    <section class="gradient-bg text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">AI×デザイン</h1>
            <p class="text-xl mb-6 opacity-90">AIを活用して、プロ品質のデザインを作成する</p>
            <p class="text-lg opacity-75 mb-8">Gemini・Canva・DALL-E・Midjourneyなど最新AIツールを活用</p>
            <a href="design-basics.php" class="inline-block bg-white text-fuchsia-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">
                学習を始める →
            </a>
        </div>
    </section>

    <!-- コース概要 -->
    <section class="py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">このコースで学べること</h2>
            <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">🎨</div>
                    <h3 class="font-bold text-lg mb-2">デザインの基礎</h3>
                    <p class="text-sm text-gray-600">デザイン思考、色彩理論、タイポグラフィなど基礎知識を習得</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">🤖</div>
                    <h3 class="font-bold text-lg mb-2">AIツール活用</h3>
                    <p class="text-sm text-gray-600">Gemini、Canva、DALL-E等のAIデザインツールを使いこなす</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <div class="text-4xl mb-4">✨</div>
                    <h3 class="font-bold text-lg mb-2">実践制作</h3>
                    <p class="text-sm text-gray-600">ロゴ、バナー、名刺、チラシ、ポスターを実際に制作</p>
                </div>
            </div>
        </div>
    </section>

    <!-- カリキュラム -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12">カリキュラム</h2>
            <div class="max-w-4xl mx-auto space-y-8">

                <!-- 第1部 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-fuchsia-600">第1部：デザインの基礎知識</h3>
                    <div class="space-y-3">
                        <a href="design-basics.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">1</span>
                                <div>
                                    <h4 class="font-bold">デザインの基礎</h4>
                                    <p class="text-sm text-gray-600">デザインの4原則、レイアウトの基本</p>
                                </div>
                            </div>
                        </a>
                        <a href="design-thinking.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">2</span>
                                <div>
                                    <h4 class="font-bold">デザイン思考</h4>
                                    <p class="text-sm text-gray-600">ユーザー中心のデザインプロセス</p>
                                </div>
                            </div>
                        </a>
                        <a href="color-typography.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">3</span>
                                <div>
                                    <h4 class="font-bold">色彩・タイポグラフィ</h4>
                                    <p class="text-sm text-gray-600">色の選び方、フォントの使い方</p>
                                </div>
                            </div>
                        </a>
                        <a href="design-tools.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">4</span>
                                <div>
                                    <h4 class="font-bold">デザインツール紹介</h4>
                                    <p class="text-sm text-gray-600">Canva、Figma、Adobe等のツール概要</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第2部 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-fuchsia-600">第2部：AI×デザインスキル</h3>
                    <div class="space-y-3">
                        <a href="ai-design-tools.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">5</span>
                                <div>
                                    <h4 class="font-bold">AIデザインツール</h4>
                                    <p class="text-sm text-gray-600">Gemini、Canva AI、Adobe Firefly等の活用法</p>
                                </div>
                            </div>
                        </a>
                        <a href="ai-image-generation.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">6</span>
                                <div>
                                    <h4 class="font-bold">AI画像生成</h4>
                                    <p class="text-sm text-gray-600">DALL-E、Midjourney、Stable Diffusionの使い方</p>
                                </div>
                            </div>
                        </a>
                        <a href="ai-design-workflow.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">7</span>
                                <div>
                                    <h4 class="font-bold">AIデザインワークフロー</h4>
                                    <p class="text-sm text-gray-600">AIを活用した効率的なデザインプロセス</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第3部 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-fuchsia-600">第3部：実践デザイン制作</h3>
                    <div class="space-y-3">
                        <a href="logo-design.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">8</span>
                                <div>
                                    <h4 class="font-bold">ロゴデザイン</h4>
                                    <p class="text-sm text-gray-600">AIを活用したロゴ制作の手順</p>
                                </div>
                            </div>
                        </a>
                        <a href="banner-design.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">9</span>
                                <div>
                                    <h4 class="font-bold">バナーデザイン</h4>
                                    <p class="text-sm text-gray-600">Web広告・SNS用バナーの制作</p>
                                </div>
                            </div>
                        </a>
                        <a href="card-design.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">10</span>
                                <div>
                                    <h4 class="font-bold">名刺デザイン</h4>
                                    <p class="text-sm text-gray-600">プロ品質の名刺をAIで作成</p>
                                </div>
                            </div>
                        </a>
                        <a href="flyer-poster.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">11</span>
                                <div>
                                    <h4 class="font-bold">チラシ・ポスター制作</h4>
                                    <p class="text-sm text-gray-600">印刷物デザインの基本と実践</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- 第4部 -->
                <div class="bg-gray-50 rounded-lg p-6">
                    <h3 class="text-xl font-bold mb-4 text-fuchsia-600">第4部：応用とサポート</h3>
                    <div class="space-y-3">
                        <a href="brand-design.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">12</span>
                                <div>
                                    <h4 class="font-bold">ブランドデザイン</h4>
                                    <p class="text-sm text-gray-600">統一感のあるブランドイメージの構築</p>
                                </div>
                            </div>
                        </a>
                        <a href="next-steps.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">13</span>
                                <div>
                                    <h4 class="font-bold">次のステップ</h4>
                                    <p class="text-sm text-gray-600">さらなるスキルアップのために</p>
                                </div>
                            </div>
                        </a>
                        <a href="glossary.php" class="block bg-white p-4 rounded shadow hover:shadow-md transition">
                            <div class="flex items-center">
                                <span class="bg-fuchsia-500 text-white px-3 py-1 rounded text-sm font-bold mr-4">14</span>
                                <div>
                                    <h4 class="font-bold">用語集</h4>
                                    <p class="text-sm text-gray-600">デザイン用語の解説</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 gradient-bg text-white">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-6">AIでデザインの世界を広げよう</h2>
            <p class="text-xl mb-8 opacity-90">専門知識がなくても、AIを使えばプロ品質のデザインが作れる時代</p>
            <a href="design-basics.php" class="inline-block bg-white text-fuchsia-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">
                今すぐ始める →
            </a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
