<?php
$page_title = 'ホットペッパービューティー対策 - AI×美容院経営 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：集客・マーケティング';
$step_number = 7;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">ホットペッパービューティー対策</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">美容院の集客に欠かせないホットペッパービューティー。AIを活用して、魅力的なサロンページ・メニュー説明・スタイリスト紹介を効率的に作成しましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">サロン紹介文の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">サロン紹介文のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    ホットペッパービューティー用のサロン紹介文を作成してください。<br><br>
                    【サロン情報】<br>
                    ・店名：〇〇ヘアサロン<br>
                    ・エリア：渋谷駅徒歩3分<br>
                    ・ターゲット：20-40代女性<br>
                    ・強み：<br>
                    　- イルミナカラー・アディクシーカラーが得意<br>
                    　- 髪質改善トリートメント<br>
                    　- マンツーマン施術<br>
                    ・雰囲気：落ち着いた大人の隠れ家<br><br>
                    【条件】<br>
                    ・300文字程度<br>
                    ・検索されやすいキーワードを含める<br>
                    ・予約したくなる魅力を伝える<br>
                    ・絵文字は控えめに
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">メニュー説明文の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">メニュー説明のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    ホットペッパービューティー用のメニュー説明文を作成してください。<br><br>
                    【メニュー名】髪質改善トリートメント<br>
                    【価格】¥8,800<br>
                    【施術時間】60分<br>
                    【特徴】<br>
                    ・酸熱トリートメント<br>
                    ・うねり・広がりを抑える<br>
                    ・ツヤ感アップ<br>
                    ・効果は約1ヶ月持続<br><br>
                    【条件】<br>
                    ・100文字程度<br>
                    ・どんな悩みの人におすすめか明記<br>
                    ・施術後のイメージが湧く表現
                </p>
            </div>
            <div class="bg-violet-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm">うねり・広がり・パサつきでお悩みの方に。酸熱トリートメントで内部から髪を整え、まとまりのあるツヤ髪へ。朝のスタイリングが格段に楽になります。効果は約1ヶ月持続。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">スタイリスト紹介文の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">スタイリスト紹介のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    ホットペッパービューティー用のスタイリスト紹介文を作成してください。<br><br>
                    【スタイリスト情報】<br>
                    ・名前：田中 美咲<br>
                    ・経験年数：8年<br>
                    ・得意なスタイル：ショート、ボブ<br>
                    ・得意な技術：骨格診断に基づくカット<br>
                    ・趣味：カフェ巡り<br>
                    ・お客様へのメッセージ：一人ひとりに似合うスタイルを提案<br><br>
                    【条件】<br>
                    ・150文字程度<br>
                    ・親しみやすさと信頼感のバランス<br>
                    ・予約したくなる要素を含める
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">クーポン・キャンペーン文の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">クーポン説明のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    ホットペッパービューティー用のクーポン説明文を作成してください。<br><br>
                    【クーポン内容】<br>
                    ・カット＋カラー＋トリートメント<br>
                    ・通常¥15,000 → ¥9,900<br>
                    ・新規限定<br><br>
                    【条件】<br>
                    ・80文字程度<br>
                    ・お得感が伝わる<br>
                    ・どんな人におすすめか明記<br>
                    ・予約を促すCTA
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ブログ記事の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-violet-600">ブログ記事のプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    ホットペッパービューティーのブログ記事を作成してください。<br><br>
                    【テーマ】春におすすめのヘアカラー<br>
                    【サロン】〇〇ヘアサロン（渋谷）<br>
                    【ターゲット】20-30代女性<br><br>
                    【条件】<br>
                    ・500文字程度<br>
                    ・具体的なカラー名を3つ紹介<br>
                    ・どんな人に似合うか明記<br>
                    ・予約を促すCTAを最後に<br>
                    ・SEOを意識したキーワード配置
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ホットペッパー対策のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">写真は明るく統一感を</h4>
                    <p class="text-sm text-gray-600">スタイル写真は自然光で撮影、トップ画像は季節ごとに更新。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">口コミには必ず返信</h4>
                    <p class="text-sm text-gray-600">返信率100%を目指す。AIで効率化しつつ、パーソナライズも忘れずに。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">ブログは週1回以上更新</h4>
                    <p class="text-sm text-gray-600">検索順位アップとアクティブな印象に。AIで下書きを作成すれば効率的。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-violet-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">クーポンは定期的に見直し</h4>
                    <p class="text-sm text-gray-600">季節やトレンドに合わせてクーポン内容を更新。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIで作成した文章は必ず確認し、サロンの雰囲気やスタイリストの個性が伝わるように調整しましょう。他店と差別化できるポイントを強調することが大切です。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="review-analysis.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：レビュー分析
        </a>
        <a href="counseling.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：カウンセリング
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
