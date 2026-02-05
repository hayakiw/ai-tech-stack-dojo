<?php
$page_title = '顧客対応・評価管理 - AI×せどり・転売 | AI Tech Stack';
$current_page = 'operation';
$section_name = '第4部：運営・スケールアップ';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">顧客対応・評価管理</h1>

    <div class="bg-lime-50 border-l-4 border-lime-500 p-6 mb-8">
        <p class="text-lg">良い評価は売上に直結します。AIを活用して、迅速で丁寧な顧客対応を実現し、高評価を獲得する方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">問い合わせ対応</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">値下げ交渉への返信</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        メルカリで以下の値下げ交渉への返信を作成してください。<br><br>
                        【出品価格】5,000円<br>
                        【希望価格】3,500円<br>
                        【最低許容価格】4,500円<br><br>
                        【条件】<br>
                        ・丁寧だが毅然とした態度<br>
                        ・完全拒否ではなく、代替案を提示<br>
                        ・購入意欲を削がない<br>
                        ・150文字程度
                    </p>
                </div>
                <div class="bg-lime-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">出力例：</p>
                    <p class="text-sm text-gray-700">
                        コメントありがとうございます！<br>
                        大変申し訳ございませんが、3,500円は難しい状況です。<br>
                        4,500円でしたら対応可能ですが、いかがでしょうか？<br>
                        ご検討いただけますと幸いです。
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">商品についての質問への回答</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        以下の質問への回答を作成してください。<br><br>
                        【質問】「この商品は正規品ですか？」<br>
                        【商品】ブランドバッグ（正規店で購入した本物）<br><br>
                        【条件】<br>
                        ・安心感を与える<br>
                        ・購入経路を説明<br>
                        ・嘘はつかない<br>
                        ・100文字程度
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">クレーム対応</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-lime-600">クレーム対応プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下のクレームへの対応メッセージを作成してください。<br><br>
                    【クレーム内容】<br>
                    「届いた商品に説明になかった傷がありました。どうしてくれますか？」<br><br>
                    【状況】<br>
                    ・傷の有無は出品時に確認済み（なかったはず）<br>
                    ・写真には写っていなかった<br>
                    ・返品・返金に応じる用意はある<br><br>
                    【条件】<br>
                    ・まずは謝罪<br>
                    ・状況確認の姿勢を示す<br>
                    ・解決策を提示<br>
                    ・誠実で丁寧なトーン<br>
                    ・200文字程度
                </p>
            </div>
        </div>

        <div class="bg-yellow-50 p-4 rounded-lg mt-4">
            <p class="text-sm text-yellow-700"><strong>注意：</strong>クレーム対応は感情的にならず、事実確認を丁寧に行いましょう。悪質なクレーマーの場合は、プラットフォームのサポートに相談することも大切です。</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">評価依頼・お礼メッセージ</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">発送通知メッセージ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        メルカリで商品発送後に送るメッセージを作成してください。<br><br>
                        【発送方法】らくらくメルカリ便<br>
                        【到着予定】明日〜明後日<br><br>
                        【条件】<br>
                        ・発送完了の報告<br>
                        ・到着予定日の目安<br>
                        ・受け取り評価のお願い（さりげなく）<br>
                        ・100文字程度
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-lime-600">取引完了後のお礼</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        取引完了後に評価コメント欄に書くお礼メッセージを作成してください。<br><br>
                        【条件】<br>
                        ・購入へのお礼<br>
                        ・スムーズな取引への感謝<br>
                        ・また機会があれば、という一言<br>
                        ・50文字程度<br>
                        ・5パターン作成
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-lime-200">高評価を維持するポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">迅速な発送</h4>
                    <p class="text-sm text-gray-600">購入から24時間以内の発送を心がける。「即発送」は高評価の元。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">丁寧な梱包</h4>
                    <p class="text-sm text-gray-600">プチプチで保護、綺麗な箱・袋を使用。開封時の印象が大切。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">迅速な返信</h4>
                    <p class="text-sm text-gray-600">質問やコメントには数時間以内に返信。対応の速さも評価対象。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-lime-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">商品説明は正確に</h4>
                    <p class="text-sm text-gray-600">「思っていたのと違う」を防ぐ。正直な説明が信頼につながる。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">顧客対応のテンプレートをAIで作っておくと、素早く丁寧な対応ができます。よくある質問・クレームへの回答を事前に用意しておきましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="inventory-management.php" class="flex items-center text-gray-600 hover:text-lime-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：在庫・売上管理
        </a>
        <a href="shipping.php" class="flex items-center bg-lime-600 text-white px-6 py-3 rounded-lg hover:bg-lime-700 transition">
            次へ：発送・梱包効率化
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
