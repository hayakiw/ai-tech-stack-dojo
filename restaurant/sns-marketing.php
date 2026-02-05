<?php
$page_title = 'SNSマーケティングをAIで効率化 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：集客・マーケティング';
$step_number = 5;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">SNSマーケティングをAIで効率化</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">SNS運用は集客に効果的ですが、毎日の投稿作成は大変。AIを活用して、魅力的な投稿を効率よく作成する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">飲食店のSNS活用基本</h2>

        <div class="grid md:grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📸</div>
                <h3 class="font-bold text-pink-600">Instagram</h3>
                <p class="text-sm text-gray-600">料理写真メイン<br>20-40代女性に強い</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">🐦</div>
                <h3 class="font-bold text-blue-500">X (Twitter)</h3>
                <p class="text-sm text-gray-600">リアルタイム情報<br>拡散力が高い</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <div class="text-3xl mb-2">📱</div>
                <h3 class="font-bold text-green-600">LINE</h3>
                <p class="text-sm text-gray-600">リピーター向け<br>クーポン配信</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">AIで投稿文を作成</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">Instagram投稿文のプロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        あなたは飲食店のSNS担当者です。<br>
                        以下の条件でInstagram投稿文を作成してください。<br><br>
                        【店舗】イタリアンレストラン<br>
                        【投稿内容】本日のパスタランチ<br>
                        【特徴】自家製生パスタ、有機野菜使用<br>
                        【価格】1,200円<br>
                        【ターゲット】30代女性、ランチ利用<br><br>
                        【条件】<br>
                        ・絵文字を適度に使用<br>
                        ・ハッシュタグを10個程度<br>
                        ・来店を促すCTAを含める<br>
                        ・200文字程度
                    </p>
                </div>
                <div class="bg-amber-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">出力例：</p>
                    <p class="text-sm">
                        🍝 本日のパスタランチ ¥1,200<br><br>
                        もちもち自家製生パスタと<br>
                        契約農家さんの有機野菜を<br>
                        たっぷり使った一皿✨<br><br>
                        今日は濃厚トマトソースで<br>
                        仕上げました🍅<br><br>
                        ランチタイムは14時まで！<br>
                        ご来店お待ちしております😊<br><br>
                        #イタリアン #パスタランチ #生パスタ<br>
                        #有機野菜 #ランチ #〇〇駅グルメ<br>
                        #パスタ好き #今日のランチ #グルメ巡り
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-amber-600">X (Twitter) 投稿文のプロンプト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        飲食店のX投稿を作成してください。<br><br>
                        【内容】本日の空席情報<br>
                        【時間帯】18時〜19時に空きあり<br>
                        【店舗の特徴】駅チカ、個室あり<br><br>
                        【条件】<br>
                        ・140文字以内<br>
                        ・緊急性を出す<br>
                        ・予約方法を明記
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">1週間分の投稿を一括作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h4 class="font-bold mb-4">投稿カレンダー作成プロンプト</h4>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    飲食店のSNS投稿カレンダーを1週間分作成してください。<br><br>
                    【店舗情報】<br>
                    ・業態：居酒屋<br>
                    ・ターゲット：30-50代会社員<br>
                    ・強み：日本酒50種類、〆の料理が人気<br><br>
                    【投稿プラットフォーム】Instagram<br><br>
                    【条件】<br>
                    ・月〜日曜日の7日分<br>
                    ・各投稿に写真のアイデアも含める<br>
                    ・投稿に最適な時間帯も提案<br>
                    ・バリエーションを持たせる（料理、スタッフ、裏側など）
                </p>
            </div>
            <p class="text-sm text-gray-600">このプロンプトで、1週間分の投稿ネタを一度に作成できます。</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">ハッシュタグ戦略</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h4 class="font-bold mb-4">効果的なハッシュタグの選び方</h4>
            <div class="grid md:grid-cols-3 gap-4 mb-4">
                <div class="bg-gray-50 p-3 rounded">
                    <h5 class="font-bold text-sm mb-2">大規模タグ</h5>
                    <p class="text-xs text-gray-600">#グルメ #ランチ<br>（発見されやすいが埋もれやすい）</p>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <h5 class="font-bold text-sm mb-2">中規模タグ</h5>
                    <p class="text-xs text-gray-600">#〇〇駅グルメ #パスタランチ<br>（ターゲットに届きやすい）</p>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <h5 class="font-bold text-sm mb-2">小規模タグ</h5>
                    <p class="text-xs text-gray-600">#店名 #オリジナルメニュー名<br>（ブランディング用）</p>
                </div>
            </div>

            <div class="bg-gray-100 p-4 rounded">
                <p class="text-sm font-mono">
                    【プロンプト例】<br>
                    〇〇駅周辺のイタリアンレストランのInstagram投稿に<br>
                    最適なハッシュタグを20個提案してください。<br>
                    大規模（100万投稿以上）、中規模（1-100万）、<br>
                    小規模（1万以下）のバランスで提案してください。
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">投稿の効果測定</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h4 class="font-bold mb-4">見るべき指標</h4>
            <ul class="space-y-3">
                <li class="flex items-start">
                    <span class="text-amber-500 mr-2">📊</span>
                    <div>
                        <span class="font-bold">リーチ数</span>
                        <span class="text-sm text-gray-600">：投稿を見た人の数</span>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-500 mr-2">❤️</span>
                    <div>
                        <span class="font-bold">エンゲージメント率</span>
                        <span class="text-sm text-gray-600">：いいね・コメント・保存の割合</span>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-500 mr-2">👤</span>
                    <div>
                        <span class="font-bold">フォロワー増加数</span>
                        <span class="text-sm text-gray-600">：新規フォロワーの獲得数</span>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="text-amber-500 mr-2">🔗</span>
                    <div>
                        <span class="font-bold">プロフィールアクセス</span>
                        <span class="text-sm text-gray-600">：予約につながる行動</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIで作成した文章は、そのまま使うのではなく、お店の「人柄」が出るように手直しするのがコツ。完璧な文章より、親しみやすい文章の方がSNSでは反応が良いことが多いです。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="chatbot-reservation.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：予約自動化
        </a>
        <a href="google-business.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：Googleビジネス最適化
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
