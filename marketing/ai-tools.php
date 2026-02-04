<?php
$page_title = 'AI時代のマーケティング - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'tools';
$section_name = '第2部：AIツールの活用';
$step_number = 5;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AI時代のマーケティング</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">AIの登場でマーケティングの世界は大きく変わりました。AIを味方につけることで、個人でも大企業並みの施策が可能になります。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AIがマーケティングにもたらす変化</h2>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-red-50 p-6 rounded-lg">
                    <h3 class="font-bold text-lg mb-4 text-red-600">従来のマーケティング</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">×</span>
                            <span>コンテンツ作成に時間がかかる</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">×</span>
                            <span>データ分析に専門知識が必要</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">×</span>
                            <span>外注コストが高い</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-400 mr-2">×</span>
                            <span>アイデア出しに限界</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-green-50 p-6 rounded-lg">
                    <h3 class="font-bold text-lg mb-4 text-green-600">AI活用マーケティング</h3>
                    <ul class="space-y-2 text-sm">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">○</span>
                            <span>コンテンツを高速で量産</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">○</span>
                            <span>AIがデータを分析・解釈</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">○</span>
                            <span>低コストで高品質を実現</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">○</span>
                            <span>無限のアイデアを生成</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">マーケティングで使えるAIツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">💬</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg mb-2">ChatGPT / Claude</h3>
                            <p class="text-gray-600 mb-3">文章生成AIの代表格。コピーライティング、企画立案、リサーチに活用</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-xs">文章作成</span>
                                <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-xs">企画立案</span>
                                <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-xs">リサーチ</span>
                                <span class="bg-teal-100 text-teal-700 px-2 py-1 rounded text-xs">分析</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🎨</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg mb-2">Midjourney / DALL-E / Stable Diffusion</h3>
                            <p class="text-gray-600 mb-3">画像生成AI。広告バナー、SNS投稿用画像、商品イメージに活用</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-cyan-100 text-cyan-700 px-2 py-1 rounded text-xs">バナー作成</span>
                                <span class="bg-cyan-100 text-cyan-700 px-2 py-1 rounded text-xs">SNS画像</span>
                                <span class="bg-cyan-100 text-cyan-700 px-2 py-1 rounded text-xs">サムネイル</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">🎬</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg mb-2">動画生成AI（Runway, Pika等）</h3>
                            <p class="text-gray-600 mb-3">テキストや画像から動画を生成。広告動画やSNSコンテンツに</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">広告動画</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">リール</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">商品紹介</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <span class="text-3xl mr-4">📊</span>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg mb-2">分析AI（GA4 + AI、各種BIツール）</h3>
                            <p class="text-gray-600 mb-3">データ分析を自動化。インサイトの発見や予測分析に</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">アクセス解析</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">売上予測</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">トレンド分析</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">AI活用の業務別マップ</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm">
                        <thead>
                            <tr class="border-b">
                                <th class="text-left py-3 px-2">業務</th>
                                <th class="text-left py-3 px-2">AI活用方法</th>
                                <th class="text-left py-3 px-2">効率化</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b">
                                <td class="py-3 px-2 font-bold">SNS投稿</td>
                                <td class="py-3 px-2">投稿文・ハッシュタグ生成</td>
                                <td class="py-3 px-2 text-teal-600">5倍速</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-3 px-2 font-bold">ブログ記事</td>
                                <td class="py-3 px-2">構成案・下書き作成</td>
                                <td class="py-3 px-2 text-teal-600">3倍速</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-3 px-2 font-bold">広告コピー</td>
                                <td class="py-3 px-2">複数パターン生成・A/Bテスト案</td>
                                <td class="py-3 px-2 text-teal-600">10倍速</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-3 px-2 font-bold">メルマガ</td>
                                <td class="py-3 px-2">件名・本文の作成</td>
                                <td class="py-3 px-2 text-teal-600">4倍速</td>
                            </tr>
                            <tr class="border-b">
                                <td class="py-3 px-2 font-bold">市場調査</td>
                                <td class="py-3 px-2">競合分析・トレンド調査</td>
                                <td class="py-3 px-2 text-teal-600">3倍速</td>
                            </tr>
                            <tr>
                                <td class="py-3 px-2 font-bold">企画立案</td>
                                <td class="py-3 px-2">アイデア出し・ブレスト</td>
                                <td class="py-3 px-2 text-teal-600">∞</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>注意点：</strong>AIの出力は必ず人間がチェック。誤情報やブランドに合わない表現がないか確認しましょう。</p>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIでマーケティング業務を大幅に効率化できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>文章AI、画像AI、動画AI、分析AIなど用途別に活用</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>ChatGPT/Claudeは最も汎用的で使いやすい</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AI出力は必ず人間がチェック・編集する</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="marketing-funnel.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：マーケティングファネル
            </a>
            <a href="chatgpt-basics.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：ChatGPT/Claudeの基本
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
