<?php
$page_title = '業務自動化とは - AI×業務自動化 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：業務自動化の基礎知識';
$step_number = 1;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">業務自動化とは</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">業務自動化とは、人が手作業で行っていた繰り返し作業をツールやAIに任せること。時間を節約し、ミスを減らし、より価値の高い仕事に集中できます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">なぜ業務自動化が必要なのか</h2>

            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">Before（自動化前）</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>毎日同じ作業に何時間もかかる</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>コピペミス・入力ミスが発生</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>単純作業で疲弊する</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-red-500 mr-2">✗</span>
                            <span>重要な仕事に時間が取れない</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">After（自動化後）</h3>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>作業が数秒〜数分で完了</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>ヒューマンエラーがゼロに</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>創造的な仕事に集中できる</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-green-500 mr-2">✓</span>
                            <span>残業時間が削減される</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">自動化できる業務の例</h2>

            <div class="space-y-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">メール関連</h3>
                    <p class="text-sm text-gray-600">定型メールの送信、メールの振り分け、自動返信、フォローアップリマインダー</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">データ入力・転記</h3>
                    <p class="text-sm text-gray-600">Excelへのデータ入力、システム間のデータ転記、請求書処理</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">ドキュメント作成</h3>
                    <p class="text-sm text-gray-600">報告書の雛形作成、議事録の自動生成、契約書のドラフト作成</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">スケジュール管理</h3>
                    <p class="text-sm text-gray-600">会議の日程調整、リマインダー送信、タスクの自動割り当て</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-2">情報収集</h3>
                    <p class="text-sm text-gray-600">Web情報の収集、競合モニタリング、SNS投稿の自動収集</p>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">自動化の3つのレベル</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-6">
                    <div class="flex items-start">
                        <span class="bg-violet-100 text-violet-600 px-3 py-1 rounded-full font-bold mr-4">Lv.1</span>
                        <div>
                            <h4 class="font-bold">単純自動化</h4>
                            <p class="text-sm text-gray-600 mt-1">1つの作業を自動化（例：毎日同じ時間にメールを送る）</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-200 text-violet-700 px-3 py-1 rounded-full font-bold mr-4">Lv.2</span>
                        <div>
                            <h4 class="font-bold">連携自動化</h4>
                            <p class="text-sm text-gray-600 mt-1">複数のツールを連携（例：フォーム回答→スプレッドシート→Slack通知）</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded-full font-bold mr-4">Lv.3</span>
                        <div>
                            <h4 class="font-bold">インテリジェント自動化</h4>
                            <p class="text-sm text-gray-600 mt-1">AIを使った判断を含む自動化（例：メール内容を分析して適切な担当者に振り分け）</p>
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
                        <span>業務自動化は時間短縮とミス削減に効果的</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>メール、データ入力、ドキュメント作成など多くの業務が対象</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>まずは簡単な自動化から始めて徐々にレベルアップ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>AIを活用すればより高度な自動化も可能</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="index.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                コース目次
            </a>
            <a href="automation-types.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：自動化の種類
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
