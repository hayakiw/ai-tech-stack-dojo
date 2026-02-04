<?php
$page_title = 'AIデザインワークフロー - AI×デザイン | AI Tech Stack';
$current_page = 'ai-skills';
$section_name = '第2部：AI×デザインスキル';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIデザインワークフロー</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">AIツールを組み合わせて使うことで、デザイン作業が劇的に効率化。企画から完成までのワークフローを紹介します。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIデザインワークフロー</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">1</div>
                        <div>
                            <h3 class="font-bold text-lg">企画・アイデア出し</h3>
                            <p class="text-gray-600 mt-2">Geminiやクロードでコンセプト、ターゲット、配色、レイアウトのアイデアを出す。</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm text-gray-600">
                                使用ツール：Gemini、Claude、ChatGPT
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">2</div>
                        <div>
                            <h3 class="font-bold text-lg">素材生成</h3>
                            <p class="text-gray-600 mt-2">画像生成AIでイラスト、写真、パターンなどの素材を作成。</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm text-gray-600">
                                使用ツール：DALL-E 3、Midjourney、Canva AI
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">3</div>
                        <div>
                            <h3 class="font-bold text-lg">デザイン制作</h3>
                            <p class="text-gray-600 mt-2">Canva、Figma等でレイアウト、配置、調整を行う。</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm text-gray-600">
                                使用ツール：Canva、Figma、Adobe Express
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">4</div>
                        <div>
                            <h3 class="font-bold text-lg">フィードバック・改善</h3>
                            <p class="text-gray-600 mt-2">AIにデザインを見せて改善点をもらう。客観的な視点で品質向上。</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm text-gray-600">
                                使用ツール：Gemini、Claude（画像解析）
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">5</div>
                        <div>
                            <h3 class="font-bold text-lg">書き出し・納品</h3>
                            <p class="text-gray-600 mt-2">用途に合わせたフォーマット（PNG、PDF、SVG等）で書き出し。</p>
                            <div class="bg-gray-100 p-3 rounded mt-3 text-sm text-gray-600">
                                使用ツール：Canva、Figma、Adobe CC
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">実践例：SNS投稿画像の制作</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">Step 1: Geminiでアイデア出し</h4>
                        <p class="text-sm text-gray-600 mt-1">「カフェの新メニュー告知用Instagram投稿のアイデアを5つ考えて」</p>
                    </div>

                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">Step 2: DALL-E 3で素材生成</h4>
                        <p class="text-sm text-gray-600 mt-1">「美味しそうな抹茶ラテの写真、上から撮影、カフェのテーブル上」</p>
                    </div>

                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">Step 3: Canvaでデザイン</h4>
                        <p class="text-sm text-gray-600 mt-1">生成した画像を配置、テキストを追加、Instagram用サイズに調整</p>
                    </div>

                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">Step 4: Geminiでチェック</h4>
                        <p class="text-sm text-gray-600 mt-1">「この画像をInstagram投稿として評価して。改善点は？」</p>
                    </div>

                    <div class="border-l-4 border-fuchsia-300 pl-4">
                        <h4 class="font-bold">Step 5: 修正して書き出し</h4>
                        <p class="text-sm text-gray-600 mt-1">フィードバックを反映、PNGで書き出してInstagramに投稿</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">効率化のポイント</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">テンプレート化</h4>
                    <p class="text-sm text-gray-600">よく使うプロンプトやデザインテンプレートを保存しておく</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">バッチ処理</h4>
                    <p class="text-sm text-gray-600">複数の画像をまとめて生成・処理して効率UP</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">ブランドガイド</h4>
                    <p class="text-sm text-gray-600">色、フォント、トーンをあらかじめ決めておく</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">素材ライブラリ</h4>
                    <p class="text-sm text-gray-600">生成した素材を整理して再利用できるようにする</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>企画→素材生成→制作→フィードバック→書き出し</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>各工程で最適なAIツールを使い分ける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>テンプレートやブランドガイドで効率化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>AIにフィードバックをもらい品質向上</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-image-generation.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AI画像生成
            </a>
            <a href="logo-design.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：ロゴデザイン
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
