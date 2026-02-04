<?php
$page_title = 'データ処理自動化 - AI×業務自動化 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 10;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">データ処理自動化</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">データ収集、整形、転記、集計...手作業でやると膨大な時間がかかるデータ処理。自動化で劇的に効率化できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">データ処理の自動化パターン</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📥 データ収集</h3>
                    <p class="text-sm text-gray-600 mb-3">複数のソースからデータを自動で取得・集約</p>
                    <div class="bg-violet-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>複数のECサイトの売上データを毎日自動で取得してスプレッドシートに集約
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">🔄 データ変換・整形</h3>
                    <p class="text-sm text-gray-600 mb-3">フォーマット変換、クレンジング、正規化</p>
                    <div class="bg-violet-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>顧客データの電話番号フォーマット統一、住所の正規化
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📋 データ転記</h3>
                    <p class="text-sm text-gray-600 mb-3">システム間でのデータコピー・同期</p>
                    <div class="bg-violet-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>Googleフォームの回答をCRMシステムに自動転記
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📊 データ集計・レポート</h3>
                    <p class="text-sm text-gray-600 mb-3">自動集計とレポート生成</p>
                    <div class="bg-violet-50 p-3 rounded text-sm">
                        <span class="font-bold">例：</span>毎週月曜朝に先週の売上を自動集計してレポートメール送信
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIでデータ処理</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">データクレンジング</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のデータを整形してください。

【元データ】
{データをここに貼り付け}

【処理内容】
1. 重複行を削除
2. 空白セルを「N/A」で埋める
3. 日付形式を「YYYY-MM-DD」に統一
4. 電話番号を「XXX-XXXX-XXXX」形式に統一
5. 会社名の「株式会社」を「（株）」に統一

CSV形式で出力してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">データ分析・要約</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の売上データを分析してください。

【データ】
{売上データ}

【分析項目】
1. 月別売上推移
2. 商品カテゴリ別売上ランキング
3. 前年同月比
4. 上位顧客リスト（TOP10）

【出力形式】
・各項目の数値
・グラフに使えるデータ形式
・3行程度のサマリーコメント</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">スプレッドシート自動化</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">Google Apps Scriptで自動処理</h3>
                <p class="text-sm text-gray-600 mb-4">AIにスクリプトを書いてもらうことで、プログラミング知識がなくても自動化できます。</p>
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">Google Apps Scriptで以下の処理を実行するスクリプトを書いてください。

【やりたいこと】
・シートAの売上データを日付で集計
・結果をシートBに出力
・毎朝9時に自動実行

【シートAの構成】
A列：日付、B列：商品名、C列：売上金額

【シートBの出力形式】
A列：日付、B列：日計売上、C列：累計売上</pre>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">まとめ</h2>
            <div class="bg-violet-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>データ収集、変換、転記、集計を自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>AIでデータクレンジングや分析が可能</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>AIにスクリプトを書いてもらえばプログラミング不要</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>定期実行で毎日・毎週の処理を完全自動化</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="document-automation.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：ドキュメント自動化
            </a>
            <a href="schedule-automation.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：スケジュール・タスク自動化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
