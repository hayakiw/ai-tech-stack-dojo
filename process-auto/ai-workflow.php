<?php
$page_title = 'AIワークフロー設計 - AI×業務自動化 | AI Tech Stack';
$current_page = 'ai-tools';
$section_name = '第2部：AI×自動化ツール';
$step_number = 6;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">AIワークフロー設計</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">単発のAI活用から一歩進んで、複数のステップを組み合わせたワークフローを設計しましょう。効率的な自動化フローの構築方法を学びます。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ワークフロー設計の基本</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-violet-600">ワークフローの構成要素</h3>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">1</span>
                        <div>
                            <h4 class="font-bold">トリガー</h4>
                            <p class="text-sm text-gray-600">ワークフローを開始するきっかけ（メール受信、時間、フォーム送信など）</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">2</span>
                        <div>
                            <h4 class="font-bold">アクション</h4>
                            <p class="text-sm text-gray-600">実行する処理（データ取得、AI処理、通知送信など）</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">3</span>
                        <div>
                            <h4 class="font-bold">条件分岐</h4>
                            <p class="text-sm text-gray-600">状況に応じて処理を変える（IF-THEN-ELSE）</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <span class="bg-violet-500 text-white px-3 py-1 rounded font-bold mr-4">4</span>
                        <div>
                            <h4 class="font-bold">出力</h4>
                            <p class="text-sm text-gray-600">処理結果の保存・通知（ファイル保存、メール送信など）</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ワークフロー例</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">例1: 問い合わせ自動対応フロー</h3>
                    <div class="bg-gray-100 p-4 rounded">
                        <div class="flex flex-col space-y-2 text-sm">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs mr-2">トリガー</span>
                                <span>問い合わせフォーム送信</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-violet-500 text-white px-2 py-1 rounded text-xs mr-2">AI処理</span>
                                <span>内容を分析してカテゴリ分類</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-yellow-500 text-white px-2 py-1 rounded text-xs mr-2">条件分岐</span>
                                <span>カテゴリに応じて担当者を決定</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-green-500 text-white px-2 py-1 rounded text-xs mr-2">出力</span>
                                <span>担当者にSlack通知 + 自動返信メール送信</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-violet-600">例2: 日次レポート自動生成フロー</h3>
                    <div class="bg-gray-100 p-4 rounded">
                        <div class="flex flex-col space-y-2 text-sm">
                            <div class="flex items-center">
                                <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs mr-2">トリガー</span>
                                <span>毎日18:00に自動実行</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-gray-500 text-white px-2 py-1 rounded text-xs mr-2">データ取得</span>
                                <span>スプレッドシートから当日のデータを取得</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-violet-500 text-white px-2 py-1 rounded text-xs mr-2">AI処理</span>
                                <span>データを分析してレポート文章を生成</span>
                            </div>
                            <div class="text-gray-400 text-center">↓</div>
                            <div class="flex items-center">
                                <span class="bg-green-500 text-white px-2 py-1 rounded text-xs mr-2">出力</span>
                                <span>レポートをドキュメント保存 + 関係者にメール送信</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">AIにワークフロー設計を相談</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の業務を自動化するワークフローを設計してください。

【自動化したい業務】
・毎週月曜日に先週の売上データを集計
・部門別の実績をまとめてレポート作成
・マネージャーにメールで報告

【利用可能なツール】
・Google スプレッドシート（売上データ）
・Zapier または Make
・ChatGPT/Claude API
・Gmail

【設計してほしいこと】
1. ワークフローの全体像（フロー図）
2. 各ステップの詳細
3. 必要な設定・連携
4. 注意点・エラー対策</pre>
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
                        <span>ワークフロー = トリガー → アクション → 条件分岐 → 出力</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>複数のステップを組み合わせて複雑な業務も自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>AIをワークフローに組み込むことで判断も自動化</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>AIにワークフロー設計自体を相談することも可能</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-automation.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIで業務を自動化
            </a>
            <a href="ai-templates.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：AI自動化テンプレート
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
