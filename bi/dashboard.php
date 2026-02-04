<?php
$page_title = 'ダッシュボード作成 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：BIツール実践';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ダッシュボード作成</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">ダッシュボードは「データの運転席」。重要な指標を一画面で把握し、素早い意思決定を可能にします。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">良いダッシュボードの条件</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">1. 目的が明確</h4>
                    <p class="text-sm text-gray-600">誰が、何のために見るのかが定義されている</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">2. 一目で把握</h4>
                    <p class="text-sm text-gray-600">重要指標が数秒で理解できる</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">3. アクションにつながる</h4>
                    <p class="text-sm text-gray-600">見たら次に何をすべきかわかる</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-emerald-600 mb-2">4. 最新データ</h4>
                    <p class="text-sm text-gray-600">リアルタイムまたは定期的に更新される</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">ダッシュボードの構成要素</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🔢</div>
                        <div>
                            <h4 class="font-bold">KPIカード</h4>
                            <p class="text-sm text-gray-600">重要指標を大きな数字で表示。前期比や目標比も併記</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📈</div>
                        <div>
                            <h4 class="font-bold">トレンドグラフ</h4>
                            <p class="text-sm text-gray-600">時系列の推移を折れ線グラフで表示</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📊</div>
                        <div>
                            <h4 class="font-bold">比較グラフ</h4>
                            <p class="text-sm text-gray-600">カテゴリ間の比較を棒グラフで表示</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">📋</div>
                        <div>
                            <h4 class="font-bold">テーブル</h4>
                            <p class="text-sm text-gray-600">詳細データをランキングや一覧で表示</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="text-3xl mr-4">🎚️</div>
                        <div>
                            <h4 class="font-bold">フィルター</h4>
                            <p class="text-sm text-gray-600">期間や条件で絞り込みできるコントロール</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIでダッシュボード設計</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">ダッシュボード構成を相談</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">営業チーム向けのダッシュボードを設計してください。

【目的】
・日次の営業活動を把握
・目標達成状況を確認
・改善ポイントを発見

【利用可能なデータ】
・商談データ（件数、金額、ステージ）
・活動データ（訪問数、電話数、メール数）
・売上データ（日次、商品別、担当者別）

【表示したい内容】
・今月の売上と目標達成率
・商談パイプライン
・担当者別の成績
・週次の活動量推移

レイアウトとグラフの種類を提案してください。</pre>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">ダッシュボード設計のコツ</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <span>最も重要な指標を左上に配置（視線の動きを意識）</span>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <span>情報の詰め込みすぎに注意（5〜7つの要素が目安）</span>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <span>色は意味を持たせる（赤=悪い、緑=良いなど統一）</span>
                    </div>
                    <div class="flex items-start">
                        <span class="text-green-500 text-xl mr-3">✓</span>
                        <span>ユーザーの声を聞いて改善を続ける</span>
                    </div>
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
                        <span>ダッシュボードは目的・対象者を明確にして設計</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>KPIカード、トレンド、比較、テーブルを組み合わせる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIに構成やレイアウトを相談できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>シンプルに保ち、継続的に改善する</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="bi-tools.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：BIツール入門
            </a>
            <a href="kpi-metrics.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：KPI・指標設計
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
