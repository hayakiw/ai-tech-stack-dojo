<?php
$page_title = 'デザインツール紹介 - AI×デザイン | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：デザインの基礎知識';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">デザインツール紹介</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">デザインツールは目的に合わせて選びましょう。初心者にはCanva、本格的に学びたい人にはFigmaがおすすめです。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">初心者におすすめ</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-4xl mr-4">🎨</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Canva</h3>
                            <p class="text-gray-600 mt-2">ドラッグ＆ドロップで簡単にデザイン。テンプレートが豊富で初心者でもプロっぽい仕上がりに。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">無料プランあり</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">AI機能搭載</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">テンプレート豊富</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">向いている用途：SNS投稿、チラシ、名刺、プレゼン資料</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-4xl mr-4">🖼️</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Adobe Express</h3>
                            <p class="text-gray-600 mt-2">Adobeの簡易版デザインツール。Canvaと似た操作感でテンプレートベースのデザインが可能。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">無料プランあり</span>
                                <span class="bg-orange-100 text-orange-700 px-2 py-1 rounded text-xs">Adobe連携</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">向いている用途：SNS投稿、簡単なグラフィック</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">本格的なデザインツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-4xl mr-4">⚡</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Figma</h3>
                            <p class="text-gray-600 mt-2">Web上で動作するデザインツール。UI/UXデザインの業界標準。チームでの共同作業に最適。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs">無料プランあり</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">リアルタイム共同編集</span>
                                <span class="bg-pink-100 text-pink-700 px-2 py-1 rounded text-xs">プラグイン豊富</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">向いている用途：Webデザイン、アプリUI、プロトタイプ</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="text-4xl mr-4">🅰️</div>
                        <div class="flex-1">
                            <h3 class="font-bold text-lg text-fuchsia-600">Adobe Creative Cloud</h3>
                            <p class="text-gray-600 mt-2">プロ御用達のデザインスイート。Photoshop、Illustrator、InDesignなど。</p>
                            <div class="mt-3 flex flex-wrap gap-2">
                                <span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs">有料（月額制）</span>
                                <span class="bg-purple-100 text-purple-700 px-2 py-1 rounded text-xs">業界標準</span>
                                <span class="bg-blue-100 text-blue-700 px-2 py-1 rounded text-xs">AI機能（Firefly）</span>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">向いている用途：写真編集、イラスト、印刷物</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">ツール選びの目安</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2">目的</th>
                            <th class="text-left py-2">おすすめツール</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-2">SNS投稿を作りたい</td>
                            <td class="py-2 text-fuchsia-600">Canva</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2">名刺・チラシを作りたい</td>
                            <td class="py-2 text-fuchsia-600">Canva / Adobe Express</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2">Webサイトをデザインしたい</td>
                            <td class="py-2 text-fuchsia-600">Figma</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-2">ロゴを作りたい</td>
                            <td class="py-2 text-fuchsia-600">Canva / Illustrator</td>
                        </tr>
                        <tr>
                            <td class="py-2">写真を加工したい</td>
                            <td class="py-2 text-fuchsia-600">Photoshop / Canva</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">まとめ</h2>
            <div class="bg-fuchsia-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>初心者はCanvaから始めるのがおすすめ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>本格的にやるならFigmaやAdobe CCを学ぶ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>目的に合わせてツールを選ぶ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>無料プランで十分試せる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="color-typography.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：色彩・タイポグラフィ
            </a>
            <a href="ai-design-tools.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：AIデザインツール
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
