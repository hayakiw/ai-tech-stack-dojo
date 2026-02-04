<?php
$page_title = 'デザイン思考 - AI×デザイン | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：デザインの基礎知識';
$step_number = 2;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">デザイン思考</h1>

        <!-- イントロ -->
        <div class="bg-fuchsia-50 border-l-4 border-fuchsia-500 p-6 mb-8">
            <p class="text-lg">デザイン思考は「ユーザー中心」で問題を解決するアプローチ。見た目だけでなく、使う人の視点でデザインを考えます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">デザイン思考の5ステップ</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">1</div>
                        <div>
                            <h3 class="font-bold text-lg">共感（Empathize）</h3>
                            <p class="text-gray-600 mt-2">ユーザーを観察し、インタビューして理解する。何に困っている？何を求めている？</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">2</div>
                        <div>
                            <h3 class="font-bold text-lg">問題定義（Define）</h3>
                            <p class="text-gray-600 mt-2">共感で得た情報から、解決すべき本質的な問題を特定する。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">3</div>
                        <div>
                            <h3 class="font-bold text-lg">創造（Ideate）</h3>
                            <p class="text-gray-600 mt-2">ブレインストーミングでアイデアを大量に出す。質より量。批判はしない。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">4</div>
                        <div>
                            <h3 class="font-bold text-lg">試作（Prototype）</h3>
                            <p class="text-gray-600 mt-2">アイデアを素早く形にする。完璧でなくていい。簡単なスケッチやモックアップでOK。</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start">
                        <div class="bg-fuchsia-500 text-white px-3 py-1 rounded font-bold mr-4 text-sm">5</div>
                        <div>
                            <h3 class="font-bold text-lg">検証（Test）</h3>
                            <p class="text-gray-600 mt-2">試作品をユーザーに使ってもらい、フィードバックを得る。改善して繰り返す。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIでデザイン思考を加速</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">ペルソナ作成</h4>
                    <p class="text-sm text-gray-600">AIにターゲットユーザー像を作ってもらう</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">アイデア出し</h4>
                    <p class="text-sm text-gray-600">AIとブレストして大量のアイデアを生成</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">フィードバック分析</h4>
                    <p class="text-sm text-gray-600">ユーザーの声をAIで整理・分析</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-fuchsia-600 mb-2">改善提案</h4>
                    <p class="text-sm text-gray-600">デザインの改善点をAIに相談</p>
                </div>
            </div>
        </section>

        <!-- AIプロンプト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-fuchsia-200">AIプロンプト例</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-fuchsia-600 mb-3">ペルソナ作成のプロンプト</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下のサービスのターゲットユーザーのペルソナを作成してください。

【サービス】オンラインヨガスタジオ
【特徴】初心者向け、15分から始められる、AIがポーズをチェック

ペルソナには以下を含めてください：
・名前、年齢、職業
・ライフスタイル
・悩みや課題
・このサービスを使う動機
・デザインで重視すべき点</pre>
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
                        <span>デザイン思考は「ユーザー中心」のアプローチ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>5ステップ：共感→定義→創造→試作→検証</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>失敗を恐れず、素早く試して改善</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-fuchsia-600 mr-2">✓</span>
                        <span>AIでペルソナ作成やアイデア出しを加速</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="design-basics.php" class="flex items-center text-gray-600 hover:text-fuchsia-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：デザインの基礎
            </a>
            <a href="color-typography.php" class="flex items-center bg-fuchsia-600 text-white px-6 py-3 rounded-lg hover:bg-fuchsia-700">
                次へ：色彩・タイポグラフィ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
