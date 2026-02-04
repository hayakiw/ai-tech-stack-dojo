<?php
$page_title = '色彩・タイポグラフィ - AI×デザイン | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：デザインの基礎知識';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">色彩・タイポグラフィ</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">色とフォントはデザインの印象を大きく左右します。基本的なルールを知っておけば、調和のとれたデザインが作れます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">色彩の基礎</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-4">色の3属性</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto rounded-full bg-gradient-to-r from-red-500 via-yellow-500 to-blue-500 mb-2"></div>
                            <h4 class="font-bold">色相</h4>
                            <p class="text-sm text-gray-600">赤、青、黄など色の種類</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto rounded-full bg-gradient-to-r from-gray-300 to-blue-600 mb-2"></div>
                            <h4 class="font-bold">彩度</h4>
                            <p class="text-sm text-gray-600">鮮やかさ。高いと派手、低いと落ち着く</p>
                        </div>
                        <div class="text-center">
                            <div class="w-16 h-16 mx-auto rounded-full bg-gradient-to-b from-white via-blue-500 to-black mb-2"></div>
                            <h4 class="font-bold">明度</h4>
                            <p class="text-sm text-gray-600">明るさ。白に近いか黒に近いか</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-4">配色パターン</h3>
                    <div class="space-y-3">
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <div class="w-8 h-8 bg-blue-500 rounded-l"></div>
                                <div class="w-8 h-8 bg-blue-300"></div>
                                <div class="w-8 h-8 bg-blue-100 rounded-r"></div>
                            </div>
                            <div>
                                <h4 class="font-bold">同系色</h4>
                                <p class="text-sm text-gray-600">同じ色相で明度や彩度を変える。統一感が出る。</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <div class="w-8 h-8 bg-blue-500 rounded-l"></div>
                                <div class="w-8 h-8 bg-orange-500 rounded-r"></div>
                            </div>
                            <div>
                                <h4 class="font-bold">補色</h4>
                                <p class="text-sm text-gray-600">色相環の反対側。コントラストが強い。</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="flex mr-4">
                                <div class="w-8 h-8 bg-blue-500 rounded-l"></div>
                                <div class="w-8 h-8 bg-teal-500"></div>
                                <div class="w-8 h-8 bg-green-500 rounded-r"></div>
                            </div>
                            <div>
                                <h4 class="font-bold">類似色</h4>
                                <p class="text-sm text-gray-600">隣り合う色。自然で調和がとれる。</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-4">色の心理効果</h3>
                    <div class="grid md:grid-cols-2 gap-3 text-sm">
                        <div class="flex items-center"><span class="w-4 h-4 bg-red-500 rounded mr-2"></span>赤：情熱、緊急、食欲</div>
                        <div class="flex items-center"><span class="w-4 h-4 bg-blue-500 rounded mr-2"></span>青：信頼、冷静、誠実</div>
                        <div class="flex items-center"><span class="w-4 h-4 bg-green-500 rounded mr-2"></span>緑：自然、安心、健康</div>
                        <div class="flex items-center"><span class="w-4 h-4 bg-yellow-500 rounded mr-2"></span>黄：明るさ、注目、警告</div>
                        <div class="flex items-center"><span class="w-4 h-4 bg-purple-500 rounded mr-2"></span>紫：高級、神秘、創造性</div>
                        <div class="flex items-center"><span class="w-4 h-4 bg-orange-500 rounded mr-2"></span>橙：活力、親しみ、楽しさ</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">タイポグラフィの基礎</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-4">フォントの種類</h3>
                    <div class="space-y-4">
                        <div>
                            <p class="text-2xl font-serif mb-1">明朝体 / Serif</p>
                            <p class="text-sm text-gray-600">伝統的、フォーマル、読みやすい（長文向け）</p>
                        </div>
                        <div>
                            <p class="text-2xl font-sans mb-1">ゴシック体 / Sans-serif</p>
                            <p class="text-sm text-gray-600">モダン、シンプル、視認性が高い（見出し・UI向け）</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg text-fuchsia-600 mb-4">タイポグラフィのルール</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-fuchsia-600 mr-2">✓</span>
                            <span><strong>フォントは2〜3種類まで</strong>：多すぎると散漫に見える</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-fuchsia-600 mr-2">✓</span>
                            <span><strong>サイズにメリハリ</strong>：見出し・本文・注釈で差をつける</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-fuchsia-600 mr-2">✓</span>
                            <span><strong>行間は1.5〜1.8倍</strong>：読みやすさに影響</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-fuchsia-600 mr-2">✓</span>
                            <span><strong>1行40文字程度</strong>：長すぎると読みにくい</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIに配色を相談</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-fuchsia-600 mb-3">Geminiへのプロンプト例</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下のブランドに合う配色を提案してください。

【ブランド】オーガニック化粧品ブランド
【ターゲット】30代女性
【イメージ】ナチュラル、上品、信頼感

以下を含めて提案してください：
・メインカラー（HEXコード）
・アクセントカラー
・背景色
・配色の理由</pre>
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
                        <span>色の3属性：色相・彩度・明度を理解</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>配色パターンで調和のとれたデザインに</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>フォントは2〜3種類、メリハリをつける</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>AIに配色提案やフォント選びを相談できる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="design-thinking.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：デザイン思考
            </a>
            <a href="design-tools.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：デザインツール紹介
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
