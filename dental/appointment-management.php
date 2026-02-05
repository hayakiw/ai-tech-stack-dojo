<?php
$page_title = '予約管理・受付効率化 - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'operation';
$section_name = '第4部：経営・運営効率化';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">予約管理・受付効率化</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">予約の取りこぼしを防ぎ、受付業務を効率化するためのAI活用術。予約確認メッセージや受付対応マニュアルの作成方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">予約確認メッセージ</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">予約リマインドメッセージ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        歯科医院の予約リマインドメッセージを作成してください。<br><br>
                        【送信タイミング】予約日の前日<br><br>
                        【含める内容】<br>
                        ・予約日時の確認<br>
                        ・持ち物の案内（保険証など）<br>
                        ・キャンセル・変更の連絡先<br>
                        ・駐車場の案内<br><br>
                        【条件】<br>
                        ・SMS向け（70文字程度）とLINE向け（150文字程度）の2パターン<br>
                        ・親しみやすく丁寧なトーン
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">予約完了の自動返信メール</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        Web予約完了時の自動返信メールを作成してください。<br><br>
                        【含める内容】<br>
                        ・予約完了のお礼<br>
                        ・予約内容の確認（日時、診療内容）<br>
                        ・初診の方への案内<br>
                        ・問診票の事前記入のお願い<br>
                        ・変更・キャンセルの方法<br>
                        ・医院の連絡先<br><br>
                        【条件】<br>
                        ・丁寧でフォーマルなトーン<br>
                        ・見やすいレイアウト
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">電話対応スクリプト</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">電話対応マニュアル</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科医院の電話対応スクリプトを作成してください。<br><br>
                    【シーン】新規予約の電話<br><br>
                    【含める内容】<br>
                    ・電話を受けた時の挨拶<br>
                    ・確認すべき情報（氏名、連絡先、症状など）<br>
                    ・予約日時の提案方法<br>
                    ・初診の方への説明<br>
                    ・電話を終える時の挨拶<br><br>
                    【条件】<br>
                    ・新人スタッフでも使えるよう具体的に<br>
                    ・想定されるやりとりの例も含める
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">キャンセル対策</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">無断キャンセル防止策</h3>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <span class="text-cyan-500 mr-3">1</span>
                        <div>
                            <h4 class="font-bold">リマインド配信</h4>
                            <p class="text-sm text-gray-600">前日・当日朝にSMSまたはLINEで自動配信。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-cyan-500 mr-3">2</span>
                        <div>
                            <h4 class="font-bold">確認の返信を促す</h4>
                            <p class="text-sm text-gray-600">「ご都合が悪くなった場合はご連絡ください」と記載。</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-cyan-500 mr-3">3</span>
                        <div>
                            <h4 class="font-bold">キャンセル待ちの活用</h4>
                            <p class="text-sm text-gray-600">キャンセル枠をすぐに埋められる仕組みを作る。</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">キャンセル後のフォローメッセージ</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        予約をキャンセルした患者さんへのフォローメッセージを作成してください。<br><br>
                        【条件】<br>
                        ・責めるような表現は避ける<br>
                        ・再予約を促す<br>
                        ・治療の必要性を優しく伝える<br>
                        ・150文字程度
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">受付効率化のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">Web問診の導入</h4>
                    <p class="text-sm text-gray-600">来院前にスマホで問診票を記入してもらい、受付時間を短縮。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">自動精算機の活用</h4>
                    <p class="text-sm text-gray-600">会計待ち時間の短縮と、金銭トラブルの防止。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">予約枠の最適化</h4>
                    <p class="text-sm text-gray-600">治療内容ごとに適切な予約時間を設定し、待ち時間を削減。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">FAQ対応の自動化</h4>
                    <p class="text-sm text-gray-600">よくある質問はLINEのリッチメニューやチャットボットで対応。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">予約管理と受付業務の効率化は、患者さんの満足度向上とスタッフの負担軽減の両方につながります。AIで定型文を用意しておき、状況に応じてカスタマイズして使いましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="recall-management.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：リコール・予防管理
        </a>
        <a href="staff-training.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：スタッフ教育・マニュアル
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
