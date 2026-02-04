<?php
$page_title = '用語集 - AI×副業・フリーランス | AI Tech Stack';
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
        <div class="bg-rose-50 border-l-4 border-rose-500 p-6 mb-8">
            <p class="text-lg">副業・フリーランスで使われる用語をまとめました。わからない言葉があったら、ここで確認してください。</p>
        </div>

        <!-- 目次 -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="font-bold mb-4">カテゴリ</h2>
            <div class="flex flex-wrap gap-2">
                <a href="#basics" class="bg-rose-100 text-rose-700 px-3 py-1 rounded hover:bg-rose-200">基礎用語</a>
                <a href="#platforms" class="bg-pink-100 text-pink-700 px-3 py-1 rounded hover:bg-pink-200">プラットフォーム</a>
                <a href="#business" class="bg-red-100 text-red-700 px-3 py-1 rounded hover:bg-red-200">ビジネス</a>
                <a href="#tax" class="bg-orange-100 text-orange-700 px-3 py-1 rounded hover:bg-orange-200">税金・法律</a>
            </div>
        </div>

        <!-- 基礎用語 -->
        <section id="basics" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">基礎用語</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600">副業</h3>
                    <p class="text-sm text-gray-600 mt-1">本業を持ちながら、それ以外の仕事で収入を得ること。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600">フリーランス</h3>
                    <p class="text-sm text-gray-600 mt-1">会社に属さず、独立して仕事を請け負う働き方。個人事業主。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600">ポートフォリオ</h3>
                    <p class="text-sm text-gray-600 mt-1">自分の実績や作品をまとめた資料。案件獲得に必須。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-rose-600">クライアント</h3>
                    <p class="text-sm text-gray-600 mt-1">仕事を依頼してくれる人・会社。お客様。</p>
                </div>
            </div>
        </section>

        <!-- プラットフォーム -->
        <section id="platforms" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">プラットフォーム</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">クラウドソーシング</h3>
                    <p class="text-sm text-gray-600 mt-1">インターネット上で仕事の発注・受注ができるサービス。ランサーズ、クラウドワークスなど。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">ランサーズ</h3>
                    <p class="text-sm text-gray-600 mt-1">日本最大級のクラウドソーシングサービス。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">クラウドワークス</h3>
                    <p class="text-sm text-gray-600 mt-1">日本最大級のクラウドソーシングサービス。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">ココナラ</h3>
                    <p class="text-sm text-gray-600 mt-1">スキルを売り買いできるマーケット。自分からサービスを出品できる。</p>
                </div>
            </div>
        </section>

        <!-- ビジネス -->
        <section id="business" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-red-200">ビジネス</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600">見積書</h3>
                    <p class="text-sm text-gray-600 mt-1">仕事の内容と金額を事前に提示する書類。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600">請求書</h3>
                    <p class="text-sm text-gray-600 mt-1">仕事完了後に報酬を請求する書類。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600">業務委託契約</h3>
                    <p class="text-sm text-gray-600 mt-1">雇用関係ではなく、仕事を委託する形式の契約。フリーランスの基本。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-red-600">リテイナー契約</h3>
                    <p class="text-sm text-gray-600 mt-1">月額固定で継続的にサービスを提供する契約形態。</p>
                </div>
            </div>
        </section>

        <!-- 税金・法律 -->
        <section id="tax" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">税金・法律</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">確定申告</h3>
                    <p class="text-sm text-gray-600 mt-1">1年間の所得と税金を計算して申告すること。副業所得20万円超で必要。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">開業届</h3>
                    <p class="text-sm text-gray-600 mt-1">個人事業を始める際に税務署に提出する届出。青色申告に必要。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">青色申告</h3>
                    <p class="text-sm text-gray-600 mt-1">最大65万円の控除が受けられる申告方法。開業届が必要。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-orange-600">経費</h3>
                    <p class="text-sm text-gray-600 mt-1">仕事に必要な支出。売上から差し引いて所得を計算できる。</p>
                </div>
            </div>
        </section>

        <!-- コース完了 -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-rose-500 to-pink-500 text-white p-8 rounded-lg text-center">
                <span class="text-5xl mb-4 block">🎉</span>
                <h2 class="text-2xl font-bold mb-4">おめでとうございます！</h2>
                <p class="mb-6">AI×副業・フリーランスコースを完了しました。<br>学んだことを活かして、副業で収入を得ましょう！</p>
                <a href="index.php" class="inline-block bg-white text-rose-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">トップページに戻る</a>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="next-steps.php" class="flex items-center text-gray-600 hover:text-rose-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：次のステップ
            </a>
            <a href="index.php" class="flex items-center bg-rose-600 text-white px-6 py-3 rounded-lg hover:bg-rose-700">
                トップページへ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
