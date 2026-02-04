<?php
$page_title = 'デザインの基本原則 - AI×ホームページ制作 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：Web制作の基礎知識';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">デザインの基本原則</h1>

        <!-- イントロ -->
        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">デザインには「原則」があります。これを知っているだけで、素人っぽさを脱却し、プロ品質のサイトが作れます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">デザインの4原則</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-3xl mb-3">📐</div>
                    <h3 class="font-bold text-lg mb-2 text-orange-600">1. 近接（Proximity）</h3>
                    <p class="text-sm text-gray-600 mb-3">関連する要素は近くに、関連しない要素は離す</p>
                    <div class="bg-gray-50 p-3 rounded text-sm">
                        <p>例：見出しと本文は近く、セクション間は広く空ける</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-3xl mb-3">📏</div>
                    <h3 class="font-bold text-lg mb-2 text-orange-600">2. 整列（Alignment）</h3>
                    <p class="text-sm text-gray-600 mb-3">要素を見えない線で揃える</p>
                    <div class="bg-gray-50 p-3 rounded text-sm">
                        <p>例：テキストは左揃えに統一、画像も端を揃える</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-3xl mb-3">🔄</div>
                    <h3 class="font-bold text-lg mb-2 text-orange-600">3. 反復（Repetition）</h3>
                    <p class="text-sm text-gray-600 mb-3">同じスタイルを繰り返し使う</p>
                    <div class="bg-gray-50 p-3 rounded text-sm">
                        <p>例：見出しは同じ色・サイズ、ボタンは同じデザイン</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="text-3xl mb-3">⚡</div>
                    <h3 class="font-bold text-lg mb-2 text-orange-600">4. コントラスト（Contrast）</h3>
                    <p class="text-sm text-gray-600 mb-3">重要な要素は目立たせる</p>
                    <div class="bg-gray-50 p-3 rounded text-sm">
                        <p>例：見出しは大きく太く、CTAボタンは派手な色に</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">配色の基本</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4">色の役割</h3>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-blue-600 rounded mr-4"></div>
                        <div>
                            <span class="font-bold">メインカラー</span>
                            <span class="text-sm text-gray-600 ml-2">ブランドを象徴する色（60%）</span>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-600 rounded mr-4"></div>
                        <div>
                            <span class="font-bold">サブカラー</span>
                            <span class="text-sm text-gray-600 ml-2">補助的な色（30%）</span>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-orange-500 rounded mr-4"></div>
                        <div>
                            <span class="font-bold">アクセントカラー</span>
                            <span class="text-sm text-gray-600 ml-2">目立たせたい箇所に（10%）</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-50 border-l-4 border-yellow-500 p-4">
                <p><strong>60-30-10の法則：</strong>メイン60%、サブ30%、アクセント10%のバランスが美しい配色の基本です。</p>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">余白の重要性</h2>

            <p class="mb-4">「余白」はデザインの質を決める最も重要な要素の一つです。</p>

            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="bg-red-50 p-4 rounded-lg">
                    <h4 class="font-bold text-red-600 mb-2">❌ 余白が少ない</h4>
                    <div class="bg-white p-2 text-xs">
                        <p class="font-bold">見出し</p>
                        <p>テキストテキストテキスト</p>
                        <p class="font-bold">見出し2</p>
                        <p>テキストテキストテキスト</p>
                    </div>
                    <p class="text-sm text-gray-600 mt-2">窮屈で読みにくい</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h4 class="font-bold text-green-600 mb-2">✅ 余白が適切</h4>
                    <div class="bg-white p-4 text-xs">
                        <p class="font-bold mb-2">見出し</p>
                        <p class="mb-6">テキストテキストテキスト</p>
                        <p class="font-bold mb-2">見出し2</p>
                        <p>テキストテキストテキスト</p>
                    </div>
                    <p class="text-sm text-gray-600 mt-2">スッキリして読みやすい</p>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIにデザインを相談</h2>

            <div class="bg-gray-800 text-gray-100 p-6 rounded-lg mb-6">
                <p class="text-orange-400 mb-2 font-bold">プロンプト例：</p>
                <pre class="text-sm whitespace-pre-wrap">以下のWebサイトの配色を提案してください。

【業種】IT企業のコーポレートサイト
【イメージ】信頼感、先進的、クリーン
【参考】Apple、Slack、Notionのような洗練されたデザイン

提案内容：
・メインカラー（HEXコード）
・サブカラー
・アクセントカラー
・背景色
・テキスト色

各色の選定理由も教えてください。</pre>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>デザインの4原則：近接・整列・反復・コントラスト</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>配色は60-30-10の法則で</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>余白を恐れない、むしろ積極的に使う</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-orange-600 mr-2">✓</span>
                        <span>AIに配色やレイアウトの相談ができる</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="responsive.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：レスポンシブデザイン
            </a>
            <a href="ai-design.php" class="flex items-center bg-orange-600 text-white px-6 py-3 rounded-lg hover:bg-orange-700">
                次へ：AIでデザインを効率化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
