<?php
$page_title = 'SNSマーケティングをAIで効率化 - AI×美容院経営 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：集客・マーケティング';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">SNSマーケティングをAIで効率化</h1>

    <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
        <p class="text-lg">美容院の集客にSNSは必須。特にInstagramとTikTokは、ビジュアルで魅せる美容業界と相性抜群。AIを活用して、魅力的な投稿を効率よく作成しましょう。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">美容院のSNS活用基本</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📸</div>
                <h3 class="font-bold text-pink-600">Instagram</h3>
                <p class="text-sm text-gray-600">スタイル写真メイン<br>ビフォーアフターが人気</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">🎵</div>
                <h3 class="font-bold text-gray-800">TikTok</h3>
                <p class="text-sm text-gray-600">施術動画・変身動画<br>若年層への訴求力</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📱</div>
                <h3 class="font-bold text-green-600">LINE</h3>
                <p class="text-sm text-gray-600">リピーター向け<br>予約・クーポン配信</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIでInstagram投稿を作成</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">スタイル紹介投稿のプロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        あなたは美容院のSNS担当者です。<br>
                        以下の条件でInstagram投稿文を作成してください。<br><br>
                        【サロン】〇〇ヘアサロン（表参道）<br>
                        【投稿内容】ボブスタイルのビフォーアフター<br>
                        【特徴】<br>
                        ・顔周りレイヤーで小顔効果<br>
                        ・透明感のあるベージュカラー<br>
                        ・朝のスタイリングが楽<br>
                        【ターゲット】30代女性、働くママ<br><br>
                        【条件】<br>
                        ・絵文字を適度に使用<br>
                        ・ハッシュタグを15個程度<br>
                        ・予約を促すCTAを含める<br>
                        ・200文字程度
                    </p>
                </div>
                <div class="bg-violet-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">出力例：</p>
                    <p class="text-sm">
                        ✨ 大人可愛いボブスタイル ✨<br><br>
                        「朝の時間がない」というお悩みを解決💡<br><br>
                        顔周りにレイヤーを入れて<br>
                        自然な小顔効果と動きをプラス✂️<br><br>
                        透明感のあるベージュカラーで<br>
                        柔らかい印象に🌿<br><br>
                        乾かすだけでまとまるので<br>
                        忙しいママにもおすすめです👶<br><br>
                        ご予約はプロフィールのリンクから📱<br><br>
                        #ボブ #ボブヘア #小顔カット<br>
                        #表参道美容室 #30代ヘア...
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">リール・TikTok用キャプション</h3>
                <div class="bg-gray-100 p-4 rounded">
                    <p class="text-sm font-mono">
                        【プロンプト】<br>
                        美容院のTikTok/リール動画のキャプションを作成してください。<br><br>
                        【動画内容】ロングからボブへのイメチェン動画<br>
                        【ターゲット】20-30代女性<br><br>
                        【条件】<br>
                        ・50文字以内（短くインパクト）<br>
                        ・続きが見たくなるフック<br>
                        ・トレンドのハッシュタグ5個
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">1週間分の投稿カレンダー</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h4 class="font-bold mb-4">投稿カレンダー作成プロンプト</h4>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    美容院のInstagram投稿カレンダーを1週間分作成してください。<br><br>
                    【サロン情報】<br>
                    ・エリア：渋谷<br>
                    ・ターゲット：20-40代女性<br>
                    ・強み：カラーが得意、髪質改善メニュー<br><br>
                    【条件】<br>
                    ・月〜日曜日の7日分<br>
                    ・投稿内容のバリエーション：<br>
                    　- スタイル写真（ビフォーアフター）<br>
                    　- スタイリスト紹介<br>
                    　- お客様の声<br>
                    　- ヘアケア豆知識<br>
                    　- 店内・雰囲気<br>
                    ・各投稿の写真アイデアも含める<br>
                    ・投稿に最適な時間帯も提案
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">美容院向けハッシュタグ戦略</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h4 class="font-bold mb-4">効果的なハッシュタグの組み合わせ</h4>
            <div class="grid md:grid-cols-3 gap-4 mb-4">
                <div class="bg-gray-50 p-3 rounded">
                    <h5 class="font-bold text-sm mb-2">大規模タグ</h5>
                    <p class="text-xs text-gray-600">#美容院 #ヘアスタイル<br>（発見されやすいが埋もれる）</p>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <h5 class="font-bold text-sm mb-2">中規模タグ</h5>
                    <p class="text-xs text-gray-600">#渋谷美容室 #ボブカット<br>（ターゲットに届きやすい）</p>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <h5 class="font-bold text-sm mb-2">小規模タグ</h5>
                    <p class="text-xs text-gray-600">#サロン名 #スタイリスト名<br>（ブランディング用）</p>
                </div>
            </div>

            <div class="bg-gray-100 p-4 rounded">
                <p class="text-sm font-mono">
                    【プロンプト例】<br>
                    渋谷エリアの美容院のInstagram投稿に最適なハッシュタグを<br>
                    20個提案してください。<br><br>
                    【スタイル】ショートボブ、カラー<br>
                    【ターゲット】20-30代女性<br><br>
                    大規模・中規模・小規模のバランスで提案してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">投稿のコツ</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-2xl mr-4">📷</span>
                <div>
                    <h4 class="font-bold">写真は明るく、統一感を</h4>
                    <p class="text-sm text-gray-600">自然光で撮影、フィードの色味を揃えるとプロフェッショナルな印象に。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-2xl mr-4">🎯</span>
                <div>
                    <h4 class="font-bold">ビフォーアフターは最強コンテンツ</h4>
                    <p class="text-sm text-gray-600">変化が分かる写真は保存・シェアされやすい。お客様の許可を忘れずに。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-2xl mr-4">⏰</span>
                <div>
                    <h4 class="font-bold">投稿時間を意識</h4>
                    <p class="text-sm text-gray-600">ターゲットがスマホを見る時間に投稿。通勤時間、昼休み、夜21時頃がおすすめ。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIで作成した文章は、そのまま使うのではなく、サロンの「個性」が出るように手直しするのがコツ。スタイリストの人柄が伝わる投稿の方が、予約につながりやすいです。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="preparation.php" class="flex items-center text-gray-600 hover:text-violet-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：導入前の準備
        </a>
        <a href="google-business.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700 transition">
            次へ：Googleビジネス最適化
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
