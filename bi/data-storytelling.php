<?php
$page_title = 'データストーリーテリング - AI×データ分析・BI | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：BIツール実践';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">データストーリーテリング</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">データは「語り方」で価値が変わる。数字を羅列するのではなく、ストーリーとして伝えることで、聴き手の理解と行動を促せます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">データストーリーテリングとは</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <p class="text-gray-600 mb-4">データ・ビジュアル・ナラティブ（語り）の3要素を組み合わせて、データから得られた洞察を効果的に伝える手法。</p>

                <div class="grid md:grid-cols-3 gap-4">
                    <div class="text-center p-4 bg-emerald-50 rounded">
                        <div class="text-3xl mb-2">📊</div>
                        <h4 class="font-bold">データ</h4>
                        <p class="text-sm text-gray-600">事実・数値の裏付け</p>
                    </div>
                    <div class="text-center p-4 bg-emerald-50 rounded">
                        <div class="text-3xl mb-2">📈</div>
                        <h4 class="font-bold">ビジュアル</h4>
                        <p class="text-sm text-gray-600">グラフ・図での可視化</p>
                    </div>
                    <div class="text-center p-4 bg-emerald-50 rounded">
                        <div class="text-3xl mb-2">📝</div>
                        <h4 class="font-bold">ナラティブ</h4>
                        <p class="text-sm text-gray-600">文脈・意味づけ・提案</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">ストーリーの構成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">1</span>
                        <div>
                            <h4 class="font-bold">フック（導入）</h4>
                            <p class="text-sm text-gray-600">聴き手の関心を引く問いかけや驚きの事実</p>
                            <p class="text-xs text-gray-500 mt-1">例：「売上が20%減少した原因、わかりますか？」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">2</span>
                        <div>
                            <h4 class="font-bold">コンテキスト（背景）</h4>
                            <p class="text-sm text-gray-600">なぜこの分析が重要なのか、前提条件を共有</p>
                            <p class="text-xs text-gray-500 mt-1">例：「昨年から市場環境が大きく変化しました」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">3</span>
                        <div>
                            <h4 class="font-bold">インサイト（発見）</h4>
                            <p class="text-sm text-gray-600">データから見えた重要な発見を提示</p>
                            <p class="text-xs text-gray-500 mt-1">例：「実は、特定の顧客セグメントだけが離脱」</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-emerald-500 text-white px-3 py-1 rounded-full font-bold mr-3">4</span>
                        <div>
                            <h4 class="font-bold">アクション（提案）</h4>
                            <p class="text-sm text-gray-600">発見を踏まえて何をすべきか提案</p>
                            <p class="text-xs text-gray-500 mt-1">例：「このセグメントに特化した施策を提案します」</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIでストーリーを作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">分析結果をストーリー化</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の分析結果を、経営会議でプレゼンするためのストーリーにまとめてください。

【分析結果】
・売上：前年比95%（目標未達）
・商品A：+15%（新機能が好評）
・商品B：-30%（競合製品に押される）
・新規顧客：-20%
・既存顧客売上：+10%

【聴き手】
経営陣（社長、役員）

【プレゼン時間】
5分

【含めてほしい要素】
・冒頭のフック
・問題の本質
・具体的なアクション提案

聴き手を引き込むストーリー構成でお願いします。</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">伝わるプレゼンのコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">聴き手を意識</h4>
                    <p class="text-sm text-gray-600">相手が知りたいこと、関心があることから話す</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">1スライド1メッセージ</h4>
                    <p class="text-sm text-gray-600">詰め込みすぎず、シンプルに</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">So What?を明確に</h4>
                    <p class="text-sm text-gray-600">「だから何？」に答える</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">アクションで締める</h4>
                    <p class="text-sm text-gray-600">聴いた後に何をすべきかを明示</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">まとめ</h2>
            <div class="bg-emerald-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>データ＋ビジュアル＋ナラティブで伝える</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>フック→背景→発見→提案の流れで構成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIにストーリー化を依頼できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>聴き手視点で「So What?」「Now What?」を意識</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="kpi-metrics.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：KPI・指標設計
            </a>
            <a href="advanced-analysis.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：高度な分析手法
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
