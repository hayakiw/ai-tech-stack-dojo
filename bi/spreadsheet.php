<?php
$page_title = 'スプレッドシート活用 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：データ分析の基礎';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">スプレッドシート活用</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">Excel・Googleスプレッドシートは、データ分析の基本ツール。関数やピボットテーブルを使いこなせば、多くの分析が可能です。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">基本の関数</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left py-2 text-emerald-600">関数</th>
                            <th class="text-left py-2 text-emerald-600">用途</th>
                            <th class="text-left py-2 text-emerald-600">例</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b">
                            <td class="py-3 font-mono">SUM</td>
                            <td class="py-3">合計</td>
                            <td class="py-3 font-mono text-gray-600">=SUM(A1:A100)</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-mono">AVERAGE</td>
                            <td class="py-3">平均</td>
                            <td class="py-3 font-mono text-gray-600">=AVERAGE(B1:B100)</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-mono">COUNT</td>
                            <td class="py-3">件数</td>
                            <td class="py-3 font-mono text-gray-600">=COUNT(C1:C100)</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-mono">MAX / MIN</td>
                            <td class="py-3">最大/最小</td>
                            <td class="py-3 font-mono text-gray-600">=MAX(D1:D100)</td>
                        </tr>
                        <tr class="border-b">
                            <td class="py-3 font-mono">COUNTIF</td>
                            <td class="py-3">条件付き件数</td>
                            <td class="py-3 font-mono text-gray-600">=COUNTIF(E:E,"東京")</td>
                        </tr>
                        <tr>
                            <td class="py-3 font-mono">SUMIF</td>
                            <td class="py-3">条件付き合計</td>
                            <td class="py-3 font-mono text-gray-600">=SUMIF(A:A,"商品A",B:B)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">ピボットテーブル</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">ピボットテーブルとは</h3>
                <p class="text-gray-600 mb-4">大量のデータを自動で集計・分析できる機能。ドラッグ&ドロップで簡単にクロス集計ができます。</p>

                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-emerald-50 p-4 rounded">
                        <h4 class="font-bold mb-2">できること</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• カテゴリ別の集計</li>
                            <li>• 時系列での推移確認</li>
                            <li>• クロス集計（2軸分析）</li>
                            <li>• フィルタリング</li>
                        </ul>
                    </div>
                    <div class="bg-emerald-50 p-4 rounded">
                        <h4 class="font-bold mb-2">活用例</h4>
                        <ul class="text-sm space-y-1 text-gray-600">
                            <li>• 地域別×月別の売上集計</li>
                            <li>• 商品カテゴリ別の販売数</li>
                            <li>• 担当者別の成績比較</li>
                            <li>• 顧客セグメント分析</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">AIでスプレッドシート操作</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">関数を作成してもらう</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の条件でExcel/スプレッドシートの関数を作成してください。

【データ構造】
A列：日付
B列：商品名
C列：売上金額
D列：担当者

【やりたいこと】
「担当者が田中で、2024年1月の売上合計」を計算する関数

SUMIFSまたは適切な関数で教えてください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-emerald-600">分析方法を相談する</h3>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の売上データを分析したいです。
スプレッドシートでできる分析方法を教えてください。

【データ項目】
日付、商品名、カテゴリ、売上金額、顧客ID、地域

【知りたいこと】
・売れ筋商品
・地域別の傾向
・月次の推移

ピボットテーブルの設定方法も含めて教えてください。</pre>
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
                        <span>SUM、AVERAGE、COUNTIFなど基本関数を押さえる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>ピボットテーブルで複雑な集計も簡単に</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>AIに関数作成や分析方法を相談できる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-emerald-600 mr-2">✓</span>
                        <span>スプレッドシートは分析の第一歩</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="data-types.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：データの種類と収集
            </a>
            <a href="visualization.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                次へ：データ可視化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
