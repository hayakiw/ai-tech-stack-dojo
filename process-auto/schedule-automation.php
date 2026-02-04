<?php
$page_title = 'スケジュール・タスク自動化 - AI×業務自動化 | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">スケジュール・タスク自動化</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">会議の日程調整、リマインダー送信、タスクの進捗管理...スケジュールとタスク管理を自動化して、本来の業務に集中しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">自動化できる業務</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">📅 日程調整</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 空き時間の自動抽出</li>
                        <li>• 候補日時の自動提案</li>
                        <li>• カレンダーへの自動登録</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">⏰ リマインダー</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 会議前の通知</li>
                        <li>• 期限前のアラート</li>
                        <li>• 定期タスクのリマインド</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">✅ タスク管理</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• タスクの自動割り当て</li>
                        <li>• ステータス更新通知</li>
                        <li>• 進捗レポート生成</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">🔔 通知・アラート</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• 異常値検知時の通知</li>
                        <li>• 承認待ちアラート</li>
                        <li>• 更新情報の自動通知</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">実践ワークフロー例</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">例1: 会議リマインダー自動送信</h3>
                    <div class="bg-gray-100 p-4 rounded">
                        <div class="flex flex-col space-y-2 text-sm">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs mr-2">トリガー</span>
                                <span>Googleカレンダーの予定（毎日チェック）</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs mr-2">条件</span>
                                <span>明日の予定で参加者が3名以上</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-green-500 text-white px-2 py-1 rounded text-xs mr-2">アクション</span>
                                <span>参加者にリマインダーメールを送信</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">例2: タスク期限アラート</h3>
                    <div class="bg-gray-100 p-4 rounded">
                        <div class="flex flex-col space-y-2 text-sm">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs mr-2">トリガー</span>
                                <span>毎朝9時に自動実行</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-gray-500 text-white px-2 py-1 rounded text-xs mr-2">データ取得</span>
                                <span>タスク管理ツールから未完了タスクを取得</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs mr-2">フィルタ</span>
                                <span>期限が今日・明日のタスクを抽出</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-green-500 text-white px-2 py-1 rounded text-xs mr-2">アクション</span>
                                <span>担当者にSlack/メールで通知</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIで日程調整メール作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の条件で日程調整メールを作成してください。

【会議の目的】{目的}
【参加者】{参加者リスト}
【希望時間】{所要時間}
【候補日時】
・{候補1}
・{候補2}
・{候補3}

【メールに含める内容】
・会議の目的を簡潔に
・候補日時を番号付きで
・都合の良い日時を返信いただくよう依頼
・オンライン/対面の選択肢

ビジネスメールとして丁寧な文面でお願いします。</pre>
                </div>
            </div>
        </section>

        <!-- おすすめツール -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">おすすめツール</h2>

            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-violet-600 mb-2">Calendly</h4>
                    <p class="text-sm text-gray-600">日程調整を完全自動化</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-violet-600 mb-2">Notion</h4>
                    <p class="text-sm text-gray-600">タスク管理とデータベース</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-violet-600 mb-2">Slack</h4>
                    <p class="text-sm text-gray-600">通知・リマインダー配信</p>
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
                        <span>日程調整、リマインダー、タスク管理を自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>定期実行で抜け漏れのない通知を実現</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>AIで日程調整メールも簡単作成</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>Calendly等の専用ツールで更に効率化</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="data-automation.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：データ処理自動化
            </a>
            <a href="advanced-automation.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：高度な自動化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
