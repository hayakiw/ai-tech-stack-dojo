<?php
$page_title = '用語集 - AI×営業・セールス | AI Tech Stack';
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
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">営業・セールスとAIで使われる用語をまとめました。わからない言葉があったら、ここで確認してください。</p>
        </div>

        <!-- 目次 -->
        <div class="bg-white p-6 rounded-lg shadow mb-8">
            <h2 class="font-bold mb-4">カテゴリ</h2>
            <div class="flex flex-wrap gap-2">
                <a href="#sales" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200">営業基礎</a>
                <a href="#process" class="bg-indigo-100 text-indigo-700 px-3 py-1 rounded hover:bg-indigo-200">営業プロセス</a>
                <a href="#metrics" class="bg-purple-100 text-purple-700 px-3 py-1 rounded hover:bg-purple-200">指標・KPI</a>
                <a href="#ai" class="bg-pink-100 text-pink-700 px-3 py-1 rounded hover:bg-pink-200">AI関連</a>
            </div>
        </div>

        <!-- 営業基礎 -->
        <section id="sales" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">営業基礎</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">BtoB（Business to Business）</h3>
                    <p class="text-sm text-gray-600 mt-1">企業対企業の取引。法人営業。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">BtoC（Business to Consumer）</h3>
                    <p class="text-sm text-gray-600 mt-1">企業対消費者の取引。個人向け営業。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">インサイドセールス</h3>
                    <p class="text-sm text-gray-600 mt-1">電話やメール、Web会議で行う非対面営業。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">フィールドセールス</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客先を訪問して行う対面営業。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">アップセル</h3>
                    <p class="text-sm text-gray-600 mt-1">より高価格・高機能な製品への買い替えを促す販売手法。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-blue-600">クロスセル</h3>
                    <p class="text-sm text-gray-600 mt-1">関連商品を追加で販売する手法。</p>
                </div>
            </div>
        </section>

        <!-- 営業プロセス -->
        <section id="process" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">営業プロセス</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-indigo-600">リード</h3>
                    <p class="text-sm text-gray-600 mt-1">見込み客。まだ商談に至っていない潜在顧客。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-indigo-600">MQL（Marketing Qualified Lead）</h3>
                    <p class="text-sm text-gray-600 mt-1">マーケティング活動で獲得した、一定の関心を示したリード。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-indigo-600">SQL（Sales Qualified Lead）</h3>
                    <p class="text-sm text-gray-600 mt-1">営業がアプローチすべきと判断したリード。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-indigo-600">パイプライン</h3>
                    <p class="text-sm text-gray-600 mt-1">営業プロセスの各段階にある案件を可視化したもの。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-indigo-600">クロージング</h3>
                    <p class="text-sm text-gray-600 mt-1">商談を成約に導く最終段階。契約締結。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-indigo-600">ナーチャリング</h3>
                    <p class="text-sm text-gray-600 mt-1">見込み客を育成し、購買意欲を高める活動。</p>
                </div>
            </div>
        </section>

        <!-- 指標・KPI -->
        <section id="metrics" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-purple-200">指標・KPI</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">CVR（Conversion Rate）</h3>
                    <p class="text-sm text-gray-600 mt-1">コンバージョン率。目標行動の達成率。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">LTV（Life Time Value）</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客生涯価値。1顧客がもたらす総収益。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">CAC（Customer Acquisition Cost）</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客獲得コスト。1顧客を獲得するのにかかる費用。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">ROI（Return on Investment）</h3>
                    <p class="text-sm text-gray-600 mt-1">投資対効果。投資に対するリターンの割合。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-purple-600">ARR（Annual Recurring Revenue）</h3>
                    <p class="text-sm text-gray-600 mt-1">年間経常収益。SaaSでよく使われる売上指標。</p>
                </div>
            </div>
        </section>

        <!-- AI関連 -->
        <section id="ai" class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-pink-200">AI関連</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">生成AI（Generative AI）</h3>
                    <p class="text-sm text-gray-600 mt-1">テキスト、画像などを自動生成できるAI。ChatGPT、Claudeなど。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">プロンプト</h3>
                    <p class="text-sm text-gray-600 mt-1">AIへの指示文。的確なプロンプトが良い出力を生む。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">CRM（Customer Relationship Management）</h3>
                    <p class="text-sm text-gray-600 mt-1">顧客関係管理。顧客情報を一元管理するシステム。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">SFA（Sales Force Automation）</h3>
                    <p class="text-sm text-gray-600 mt-1">営業支援システム。営業活動を効率化するツール。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-pink-600">リードスコアリング</h3>
                    <p class="text-sm text-gray-600 mt-1">見込み客の成約確度をスコア化する手法。AIで自動化可能。</p>
                </div>
            </div>
        </section>

        <!-- コース完了 -->
        <section class="mb-12">
            <div class="bg-gradient-to-r from-blue-500 to-indigo-500 text-white p-8 rounded-lg text-center">
                <span class="text-5xl mb-4 block">🎉</span>
                <h2 class="text-2xl font-bold mb-4">おめでとうございます！</h2>
                <p class="mb-6">AI×営業・セールスコースを完了しました。<br>学んだことを活かして、成果を出しましょう！</p>
                <a href="index.php" class="inline-block bg-white text-blue-600 px-8 py-3 rounded-lg font-bold hover:bg-gray-100 transition">トップページに戻る</a>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="next-steps.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：次のステップ
            </a>
            <a href="index.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                トップページへ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
