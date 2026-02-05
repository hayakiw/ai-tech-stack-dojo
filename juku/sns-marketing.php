<?php
$page_title = 'SNSマーケティング - AI×学習塾経営 | AI Tech Stack';
$current_page = 'marketing';
$section_name = '第2部：集客・マーケティング';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">SNSマーケティング</h1>

    <div class="bg-indigo-50 border-l-4 border-indigo-500 p-6 mb-8">
        <p class="text-lg">Instagram、LINE、XなどのSNSを活用した集客方法をAIで効率化。投稿文の作成からハッシュタグ選定まで、実践的なプロンプトを紹介します。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">塾に効果的なSNS</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📸</div>
                <h3 class="font-bold text-pink-500">Instagram</h3>
                <p class="text-sm text-gray-600">教室の雰囲気、合格実績、イベントの発信に最適</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">💬</div>
                <h3 class="font-bold text-green-500">LINE公式</h3>
                <p class="text-sm text-gray-600">保護者との連絡、体験授業の予約受付に必須</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">🐦</div>
                <h3 class="font-bold text-blue-400">X（Twitter）</h3>
                <p class="text-sm text-gray-600">学習情報の発信、塾の雰囲気を伝えるのに有効</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">Instagram投稿文の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">投稿文作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    学習塾のInstagram投稿文を作成してください。<br><br>
                    【塾の特徴】<br>
                    ・個別指導塾<br>
                    ・対象：小学生〜高校生<br>
                    ・地域：〇〇市<br><br>
                    【投稿テーマ】<br>
                    定期テスト対策講座の案内<br><br>
                    【条件】<br>
                    ・親しみやすいトーン<br>
                    ・絵文字を適度に使用<br>
                    ・行動を促すCTAを含める<br>
                    ・ハッシュタグを10個提案
                </p>
            </div>
            <div class="bg-indigo-50 p-4 rounded">
                <p class="text-sm font-bold mb-2">出力例：</p>
                <p class="text-sm text-gray-700">
                    📚 定期テスト対策、始まります！<br><br>
                    「テスト範囲、どこから手をつけていいか分からない...」<br>
                    そんなお悩み、ありませんか？<br><br>
                    〇〇塾では、お子様の学校の進度に合わせた<br>
                    オーダーメイドのテスト対策を行っています✨<br><br>
                    ▶️ 苦手単元を集中特訓<br>
                    ▶️ 過去問で実践練習<br>
                    ▶️ 質問し放題の環境<br><br>
                    まずは無料体験授業から！<br>
                    プロフィールのリンクからお申込みいただけます🎯
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">LINE公式アカウントの活用</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">あいさつメッセージの作成</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        学習塾のLINE公式アカウント用あいさつメッセージを作成してください。<br><br>
                        【条件】<br>
                        ・友だち追加時に自動送信される<br>
                        ・塾の特徴を簡潔に伝える<br>
                        ・体験授業への誘導を含める<br>
                        ・文字数：300文字程度<br>
                        ・親しみやすく温かいトーン
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-indigo-600">配信コンテンツのアイデア</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">定期配信</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>・学習アドバイス（週1回）</li>
                            <li>・テスト対策情報</li>
                            <li>・入試情報・進路情報</li>
                        </ul>
                    </div>
                    <div class="bg-gray-50 p-4 rounded">
                        <h4 class="font-bold mb-2">タイムリー配信</h4>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>・季節講習の案内</li>
                            <li>・イベント告知</li>
                            <li>・休塾日のお知らせ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-indigo-200">投稿ネタのアイデア出し</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-indigo-600">1ヶ月分のネタ出しプロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    学習塾のSNS（Instagram）投稿ネタを30個提案してください。<br><br>
                    【塾の情報】<br>
                    ・個別指導塾<br>
                    ・対象：中学生・高校生<br>
                    ・強み：定期テスト対策、受験指導<br><br>
                    【カテゴリ】<br>
                    ・学習アドバイス系（10個）<br>
                    ・塾の日常・雰囲気系（10個）<br>
                    ・お知らせ・イベント系（10個）<br><br>
                    それぞれ簡単な投稿内容のヒントも付けてください。
                </p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">SNSは「継続」が大切。AIを活用して投稿作成の負担を減らし、週に2〜3回の投稿を目標に続けましょう。保護者の目に触れる機会を増やすことが集客につながります。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="preparation.php" class="flex items-center text-gray-600 hover:text-indigo-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：導入準備
        </a>
        <a href="google-business.php" class="flex items-center bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition">
            次へ：Googleビジネスプロフィール
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
