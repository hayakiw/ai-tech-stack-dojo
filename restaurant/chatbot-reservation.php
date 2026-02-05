<?php
$page_title = 'AIチャットボットで予約・問い合わせ自動化 - AI×飲食店経営 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：集客・マーケティング';
$step_number = 4;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">AIチャットボットで予約・問い合わせ自動化</h1>

    <div class="bg-amber-50 border-l-4 border-amber-500 p-6 mb-8">
        <p class="text-lg">電話対応の負担を減らし、24時間予約受付を実現。AIチャットボットを活用した予約・問い合わせ自動化の方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">予約自動化のメリット</h2>

        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">🕐</div>
                <h3 class="font-bold mb-2">24時間受付</h3>
                <p class="text-sm text-gray-600">営業時間外でも予約を受け付けられるため、機会損失を防げます。</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">📞</div>
                <h3 class="font-bold mb-2">電話対応の削減</h3>
                <p class="text-sm text-gray-600">ピーク時の電話対応を減らし、接客に集中できます。</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">✅</div>
                <h3 class="font-bold mb-2">予約ミスの防止</h3>
                <p class="text-sm text-gray-600">自動化により、聞き間違いや記入ミスを防止できます。</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-3xl mb-3">📊</div>
                <h3 class="font-bold mb-2">データ蓄積</h3>
                <p class="text-sm text-gray-600">予約データが自動で蓄積され、分析に活用できます。</p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">LINE公式アカウントの活用</h2>

        <div class="bg-white p-6 rounded-lg shadow mb-6">
            <h3 class="font-bold text-lg mb-4 text-amber-600">基本設定の手順</h3>
            <ol class="space-y-4">
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">1</span>
                    <div>
                        <h4 class="font-bold">LINE公式アカウントを開設</h4>
                        <p class="text-sm text-gray-600">LINE for Businessから無料で開設できます。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">2</span>
                    <div>
                        <h4 class="font-bold">自動応答メッセージを設定</h4>
                        <p class="text-sm text-gray-600">よくある質問（営業時間、駐車場など）への自動返信を設定。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">3</span>
                    <div>
                        <h4 class="font-bold">リッチメニューを作成</h4>
                        <p class="text-sm text-gray-600">「予約する」「メニューを見る」などのボタンを設置。</p>
                    </div>
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-1 rounded text-sm font-bold mr-3">4</span>
                    <div>
                        <h4 class="font-bold">予約フォームを連携</h4>
                        <p class="text-sm text-gray-600">Googleフォームや予約システムと連携。</p>
                    </div>
                </li>
            </ol>
        </div>

        <div class="bg-gray-50 p-6 rounded-lg">
            <h4 class="font-bold mb-3">自動応答メッセージの例</h4>
            <div class="bg-white p-4 rounded border">
                <p class="text-sm mb-2"><strong>キーワード：</strong>「営業時間」「何時まで」</p>
                <p class="text-sm bg-green-50 p-3 rounded">
                    ご連絡ありがとうございます！🍽️<br><br>
                    【営業時間】<br>
                    ランチ 11:30〜14:00（L.O.13:30）<br>
                    ディナー 17:00〜22:00（L.O.21:30）<br><br>
                    定休日：毎週月曜日<br><br>
                    ご予約はこちらから↓<br>
                    [予約フォームURL]
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">ChatGPTでFAQ回答を作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h4 class="font-bold mb-3">プロンプト例</h4>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    あなたは飲食店のカスタマーサポート担当です。<br>
                    以下の情報をもとに、お客様からのよくある質問に対する回答を作成してください。<br><br>
                    【店舗情報】<br>
                    ・店名：〇〇レストラン<br>
                    ・営業時間：11:30-14:00、17:00-22:00<br>
                    ・定休日：月曜日<br>
                    ・駐車場：5台あり<br>
                    ・個室：2部屋（4名様、8名様）<br><br>
                    【作成してほしいFAQ】<br>
                    1. 予約方法について<br>
                    2. 駐車場について<br>
                    3. 子連れ来店について<br>
                    4. アレルギー対応について<br>
                    5. キャンセルポリシーについて
                </p>
            </div>
            <p class="text-sm text-gray-600">このプロンプトで、一貫したトーンのFAQ回答を一括作成できます。</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">予約システムの選び方</h2>

        <div class="overflow-x-auto">
            <table class="w-full bg-white rounded-lg shadow">
                <thead class="bg-amber-100">
                    <tr>
                        <th class="px-4 py-3 text-left">サービス名</th>
                        <th class="px-4 py-3 text-left">特徴</th>
                        <th class="px-4 py-3 text-left">料金</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="px-4 py-3 font-medium">Googleフォーム</td>
                        <td class="px-4 py-3 text-sm">シンプル、無料、スプレッドシート連携</td>
                        <td class="px-4 py-3 text-sm">無料</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">TableCheck</td>
                        <td class="px-4 py-3 text-sm">飲食店特化、多機能</td>
                        <td class="px-4 py-3 text-sm">要問い合わせ</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">トレタ</td>
                        <td class="px-4 py-3 text-sm">顧客管理機能充実</td>
                        <td class="px-4 py-3 text-sm">要問い合わせ</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3 font-medium">ホットペッパー</td>
                        <td class="px-4 py-3 text-sm">集客力あり、手数料型</td>
                        <td class="px-4 py-3 text-sm">送客手数料</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="bg-amber-50 p-4 rounded-lg mt-4">
            <p class="text-sm">💡 小規模店舗は、まずGoogleフォーム＋LINE公式アカウントの組み合わせがおすすめ。費用を抑えて始められます。</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-amber-200">実践：予約フォームを作成しよう</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h4 class="font-bold mb-4">Googleフォームで予約フォームを作る</h4>
            <ol class="space-y-3 text-sm">
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">1</span>
                    Googleドライブで「新規」→「Googleフォーム」を選択
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">2</span>
                    タイトルを「〇〇レストラン ご予約フォーム」に設定
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">3</span>
                    質問項目を追加：お名前、電話番号、メールアドレス、予約日時、人数、備考
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">4</span>
                    「回答」タブでスプレッドシート連携を設定
                </li>
                <li class="flex items-start">
                    <span class="bg-amber-500 text-white px-2 py-0.5 rounded text-xs font-bold mr-2">5</span>
                    「送信」ボタンでURLを取得し、LINEのリッチメニューに設定
                </li>
            </ol>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">すべての問い合わせを自動化する必要はありません。「よくある質問」を自動化するだけでも、大幅な時間削減になります。複雑な問い合わせは人が対応する、というハイブリッド型がおすすめです。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="preparation.php" class="flex items-center text-gray-600 hover:text-amber-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：導入前の準備
        </a>
        <a href="sns-marketing.php" class="flex items-center bg-amber-600 text-white px-6 py-3 rounded-lg hover:bg-amber-700 transition">
            次へ：SNSマーケティング
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
