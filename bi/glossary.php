<?php
$page_title = '用語集 - AI×データ分析・BI | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：応用とサポート';
$step_number = 14;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">用語集</h1>

        <!-- イントロ -->
        <div class="bg-emerald-50 border-l-4 border-emerald-500 p-6 mb-8">
            <p class="text-lg">データ分析・BIで使われる用語をまとめました。わからない言葉があったら、ここで確認してください。</p>
        </div>

        <!-- 目次 -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="font-bold mb-4">カテゴリ</h2>
            <div class="flex flex-wrap gap-2">
                <a href="#basics" class="bg-emerald-100 text-emerald-700 px-3 py-1 rounded hover:bg-emerald-200">分析基礎</a>
                <a href="#metrics" class="bg-green-100 text-green-700 px-3 py-1 rounded hover:bg-green-200">指標・KPI</a>
                <a href="#bi" class="bg-teal-100 text-teal-700 px-3 py-1 rounded hover:bg-teal-200">BIツール</a>
                <a href="#ai" class="bg-cyan-100 text-cyan-700 px-3 py-1 rounded hover:bg-cyan-200">AI関連</a>
            </div>
        </div>

        <!-- 分析基礎 -->
        <section id="basics" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-emerald-200">分析基礎</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">データ分析</h3>
                    <p class="text-sm text-gray-600 mt-1">データから意味のある情報を引き出し、意思決定に活用すること。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">インサイト</h3>
                    <p class="text-sm text-gray-600 mt-1">データから得られる洞察・気づき。ビジネスアクションにつながる発見。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">可視化（Visualization）</h3>
                    <p class="text-sm text-gray-600 mt-1">データをグラフやチャートで視覚的に表現すること。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">相関関係</h3>
                    <p class="text-sm text-gray-600 mt-1">2つの変数が連動して変化する関係。因果関係とは異なる。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-emerald-600">外れ値（Outlier）</h3>
                    <p class="text-sm text-gray-600 mt-1">他のデータから大きく外れた異常な値。</p>
                </div>
            </div>
        </section>

        <!-- 指標・KPI -->
        <section id="metrics" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-green-200">指標・KPI</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600">KPI（重要業績評価指標）</h3>
                    <p class="text-sm text-gray-600 mt-1">目標達成に向けた進捗を測る指標。Key Performance Indicator。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600">KGI（重要目標達成指標）</h3>
                    <p class="text-sm text-gray-600 mt-1">最終的に達成したいゴール。Key Goal Indicator。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600">CVR（コンバージョン率）</h3>
                    <p class="text-sm text-gray-600 mt-1">目標行動（購入、登録など）に至った割合。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600">LTV（顧客生涯価値）</h3>
                    <p class="text-sm text-gray-600 mt-1">1顧客が生涯にわたってもたらす総収益。Life Time Value。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-green-600">ARPU（顧客単価）</h3>
                    <p class="text-sm text-gray-600 mt-1">1ユーザーあたりの平均収益。Average Revenue Per User。</p>
                </div>
            </div>
        </section>

        <!-- BIツール -->
        <section id="bi" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">BIツール</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">BI（ビジネスインテリジェンス）</h3>
                    <p class="text-sm text-gray-600 mt-1">データを収集・分析・可視化してビジネス意思決定を支援する仕組み。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">ダッシュボード</h3>
                    <p class="text-sm text-gray-600 mt-1">重要な指標やグラフを一画面にまとめた表示画面。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">ドリルダウン</h3>
                    <p class="text-sm text-gray-600 mt-1">概要から詳細へ、データを掘り下げて分析すること。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">ETL</h3>
                    <p class="text-sm text-gray-600 mt-1">データの抽出（Extract）・変換（Transform）・格納（Load）。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-teal-600">データウェアハウス</h3>
                    <p class="text-sm text-gray-600 mt-1">分析用に整理・統合されたデータベース。</p>
                </div>
            </div>
        </section>

        <!-- AI関連 -->
        <section id="ai" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">AI関連</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">生成AI</h3>
                    <p class="text-sm text-gray-600 mt-1">テキスト、画像などを自動生成できるAI。ChatGPT、Claudeなど。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">機械学習</h3>
                    <p class="text-sm text-gray-600 mt-1">データからパターンを学習し、予測や分類を行う技術。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">予測分析</h3>
                    <p class="text-sm text-gray-600 mt-1">過去データから将来を予測する分析手法。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-cyan-600">自然言語処理（NLP）</h3>
                    <p class="text-sm text-gray-600 mt-1">人間の言葉をAIが理解・生成する技術。</p>
                </div>
            </div>
        </section>

        <!-- コース完了 -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-emerald-500 to-green-500 text-white p-8 rounded-lg text-center">
                <span class="text-5xl mb-4 block">🎉</span>
                <h2 class="text-2xl font-bold mb-4">おめでとうございます！</h2>
                <p class="mb-6">AI×データ分析・BIコースを完了しました。<br>学んだことを活かして、データドリブンな意思決定を実現しましょう！</p>
                <a href="index.php" class="inline-block bg-white text-emerald-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">トップページに戻る</a>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="next-steps.php" class="flex items-center text-gray-600 hover:text-emerald-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：次のステップ
            </a>
            <a href="index.php" class="flex items-center bg-emerald-600 text-white px-6 py-3 rounded-lg hover:bg-emerald-700">
                トップページへ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
