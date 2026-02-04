<?php
$page_title = '高度な自動化 - AI×業務自動化 | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：応用とサポート';
$step_number = 12;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">高度な自動化</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">基本をマスターしたら、複数のワークフローを組み合わせた高度な自動化に挑戦しましょう。条件分岐やエラー処理を含む本格的な自動化を学びます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">複合ワークフロー</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-violet-600">例: 見込み客管理の完全自動化</h3>
                <div class="bg-gray-100 p-4 rounded">
                    <div class="flex flex-col space-y-2 text-sm">
                        <div class="flex items-center">
                            <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs mr-2">1</span>
                            <span>問い合わせフォーム送信</span>
                        </div>
                        <div class="text-gray-400 text-center">↓</div>
                        <div class="flex items-center">
                            <span class="bg-violet-500 text-white px-2 py-1 rounded text-xs mr-2">2</span>
                            <span>AIが内容を分析（緊急度・カテゴリ判定）</span>
                        </div>
                        <div class="text-gray-400 text-center">↓</div>
                        <div class="flex items-center">
                            <span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs mr-2">3</span>
                            <span>緊急度に応じて担当者を自動割り当て</span>
                        </div>
                        <div class="text-gray-400 text-center">↓</div>
                        <div class="flex items-center">
                            <span class="bg-green-500 text-white px-2 py-1 rounded text-xs mr-2">4</span>
                            <span>CRMに顧客情報を自動登録</span>
                        </div>
                        <div class="text-gray-400 text-center">↓</div>
                        <div class="flex items-center">
                            <span class="bg-orange-500 text-white px-2 py-1 rounded text-xs mr-2">5</span>
                            <span>担当者にSlack通知 + 自動返信メール送信</span>
                        </div>
                        <div class="text-gray-400 text-center">↓</div>
                        <div class="flex items-center">
                            <span class="bg-red-500 text-white px-2 py-1 rounded text-xs mr-2">6</span>
                            <span>3日後に自動フォローアップメール</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">条件分岐のパターン</h2>

            <div class="space-y-4">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-3">IF-THEN-ELSE分岐</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="bg-green-50 p-3 rounded">
                            <p class="font-bold text-green-600 text-sm mb-1">条件が真の場合</p>
                            <p class="text-sm text-gray-600">金額が10万円以上 → 上長承認フロー</p>
                        </div>
                        <div class="bg-red-50 p-3 rounded">
                            <p class="font-bold text-red-600 text-sm mb-1">条件が偽の場合</p>
                            <p class="text-sm text-gray-600">金額が10万円未満 → 自動承認</p>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-3">複数条件分岐</h3>
                    <div class="bg-gray-100 p-4 rounded text-sm">
                        <p><strong>顧客ランクがAの場合</strong> → 専任担当者にアサイン</p>
                        <p><strong>顧客ランクがBの場合</strong> → チームに通知</p>
                        <p><strong>顧客ランクがCの場合</strong> → 自動対応</p>
                        <p><strong>上記以外</strong> → 一般問い合わせとして処理</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-violet-600 mb-3">AIによる条件判定</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">以下のメールを分析して、対応の緊急度を判定してください。

【メール内容】
{メール本文}

【判定基準】
- 高: 即時対応が必要（クレーム、障害報告など）
- 中: 当日中に対応（一般的な問い合わせ）
- 低: 数日以内に対応可（情報提供依頼など）

【出力形式】
緊急度: [高/中/低]
理由: [判定理由を1行で]</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">エラー処理・リカバリー</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">リトライ処理</h4>
                    <p class="text-sm text-gray-600">API接続エラー時に自動で再試行（3回まで）</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">エラー通知</h4>
                    <p class="text-sm text-gray-600">処理失敗時に管理者へ即座にアラート送信</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">フォールバック</h4>
                    <p class="text-sm text-gray-600">メイン処理失敗時に代替処理を実行</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">ログ記録</h4>
                    <p class="text-sm text-gray-600">すべての処理をログに記録して追跡可能に</p>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">自動化の運用・保守</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">1</span>
                        <div>
                            <h4 class="font-bold">定期的な動作確認</h4>
                            <p class="text-sm text-gray-600 mt-1">週1回は自動化フローが正常に動作しているか確認</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">2</span>
                        <div>
                            <h4 class="font-bold">ログ監視</h4>
                            <p class="text-sm text-gray-600 mt-1">エラーログを定期チェックして問題を早期発見</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">3</span>
                        <div>
                            <h4 class="font-bold">ドキュメント化</h4>
                            <p class="text-sm text-gray-600 mt-1">各自動化フローの仕様を記録して引き継ぎ可能に</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">4</span>
                        <div>
                            <h4 class="font-bold">改善サイクル</h4>
                            <p class="text-sm text-gray-600 mt-1">運用しながら問題点を発見し、継続的に改善</p>
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
                        <span>複数ワークフローを組み合わせて高度な自動化を実現</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>条件分岐で状況に応じた処理を自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>エラー処理・リカバリーで安定稼働を実現</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>運用・保守の仕組みで長期的に効果を維持</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="schedule-automation.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：スケジュール・タスク自動化
            </a>
            <a href="next-steps.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：次のステップ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
