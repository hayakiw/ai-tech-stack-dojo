<?php
$page_title = 'ドキュメント自動化 - AI×業務自動化 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">ドキュメント自動化</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">報告書、議事録、契約書、マニュアル...ドキュメント作成は時間がかかる業務の代表格。AIを活用して効率的に作成しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">自動化できるドキュメント</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📋 報告書・レポート</h3>
                    <p class="text-sm text-gray-600">日報、週報、月次レポート、営業報告書</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📝 議事録</h3>
                    <p class="text-sm text-gray-600">会議議事録、打ち合わせメモ、ミーティングサマリー</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📄 契約・請求関連</h3>
                    <p class="text-sm text-gray-600">見積書、請求書、契約書ドラフト</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📚 マニュアル・手順書</h3>
                    <p class="text-sm text-gray-600">業務マニュアル、操作手順書、FAQ</p>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIドキュメント作成テンプレート</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">日報自動生成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の情報から日報を作成してください。

【日付】{日付}
【今日やったこと】
- {タスク1}
- {タスク2}
- {タスク3}

【発生した問題】
{問題があれば記載}

【明日の予定】
{予定を記載}

【日報フォーマット】
1. 本日の業務内容（箇条書き、成果を具体的に）
2. 課題・問題点
3. 明日の予定
4. 所感（1-2行）</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">議事録自動生成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の会議メモから正式な議事録を作成してください。

【会議情報】
・会議名：{会議名}
・日時：{日時}
・場所：{場所/オンライン}
・参加者：{参加者}

【会議メモ（箇条書きOK）】
{メモ内容}

【議事録に含める項目】
1. 議題
2. 決定事項（明確に箇条書き）
3. 討議内容の要点
4. アクションアイテム（担当者・期限を明記）
5. 次回会議予定</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">マニュアル自動生成</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下の業務手順についてマニュアルを作成してください。

【業務名】{業務名}
【対象者】{初心者/経験者}
【手順の概要】
{大まかな手順を箇条書き}

【マニュアルに含める内容】
1. 目的・ゴール
2. 事前準備（必要なもの）
3. 手順（番号付きステップ）
4. 注意点・よくある間違い
5. トラブル時の対処法
6. 関連資料リンク</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ドキュメント自動化のワークフロー</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">1</span>
                        <div>
                            <h4 class="font-bold">テンプレート準備</h4>
                            <p class="text-sm text-gray-600 mt-1">ドキュメントの雛形とAIプロンプトを用意</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">2</span>
                        <div>
                            <h4 class="font-bold">データ入力</h4>
                            <p class="text-sm text-gray-600 mt-1">必要な情報をフォームやスプレッドシートに入力</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">3</span>
                        <div>
                            <h4 class="font-bold">AI処理</h4>
                            <p class="text-sm text-gray-600 mt-1">入力データをもとにAIがドキュメントを生成</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">4</span>
                        <div>
                            <h4 class="font-bold">確認・修正</h4>
                            <p class="text-sm text-gray-600 mt-1">人がチェックして必要に応じて修正</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">5</span>
                        <div>
                            <h4 class="font-bold">配布・保存</h4>
                            <p class="text-sm text-gray-600 mt-1">完成したドキュメントを自動で配布・保存</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">まとめ</h2>
            <div class="bg-violet-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>日報、議事録、マニュアルなど定型ドキュメントはAIで自動生成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>テンプレートとプロンプトを準備しておくと効率的</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>完成ドキュメントは必ず人がチェック</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>ワークフロー化すれば入力から配布まで自動化可能</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="email-automation.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：メール自動化
            </a>
            <a href="data-automation.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：データ処理自動化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
