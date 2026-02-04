<?php
$page_title = '自動化ツールの紹介 - AI×業務自動化 | AI Tech Stack';
$current_page = 'basics';
$section_name = '第1部：業務自動化の基礎知識';
$step_number = 3;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">自動化ツールの紹介</h1>

        <!-- イントロ -->
        <div class="bg-violet-50 border-l-4 border-violet-500 p-6 mb-8">
            <p class="text-lg">業務自動化に使える主要なツールを紹介します。それぞれの特徴を理解して、自分の業務に合ったツールを選びましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ノーコード連携ツール</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <div class="flex items-start justify-between">
                        <div>
                            <h3 class="font-bold text-xl text-violet-600">Zapier</h3>
                            <p class="text-sm text-gray-500 mt-1">世界で最も人気のある自動化プラットフォーム</p>
                        </div>
                        <span class="bg-violet-100 text-violet-600 px-3 py-1 rounded text-sm">おすすめ</span>
                    </div>
                    <p class="text-sm text-gray-600 mt-4">5,000以上のアプリと連携可能。直感的なUIで簡単に自動化フローを作成できる。</p>
                    <div class="mt-4 grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="font-bold text-green-600">メリット</span>
                            <ul class="mt-1 text-gray-600 space-y-1">
                                <li>• 対応アプリが非常に多い</li>
                                <li>• 使いやすいインターフェース</li>
                                <li>• 無料プランあり</li>
                            </ul>
                        </div>
                        <div>
                            <span class="font-bold text-red-600">デメリット</span>
                            <ul class="mt-1 text-gray-600 space-y-1">
                                <li>• 日本語対応が限定的</li>
                                <li>• 複雑な処理は有料プラン必要</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-xl text-violet-600">Make（旧Integromat）</h3>
                    <p class="text-sm text-gray-500 mt-1">視覚的なフロー設計が得意なツール</p>
                    <p class="text-sm text-gray-600 mt-4">フローチャート形式で複雑なワークフローを設計できる。条件分岐やループ処理に強い。</p>
                    <div class="mt-4 grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="font-bold text-green-600">メリット</span>
                            <ul class="mt-1 text-gray-600 space-y-1">
                                <li>• 複雑なフローを視覚的に設計</li>
                                <li>• 無料枠が比較的多い</li>
                                <li>• 細かい制御が可能</li>
                            </ul>
                        </div>
                        <div>
                            <span class="font-bold text-red-600">デメリット</span>
                            <ul class="mt-1 text-gray-600 space-y-1">
                                <li>• 学習コストがやや高い</li>
                                <li>• 初心者には複雑に感じる場合も</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-xl text-violet-600">Power Automate</h3>
                    <p class="text-sm text-gray-500 mt-1">Microsoft製の自動化ツール</p>
                    <p class="text-sm text-gray-600 mt-4">Microsoft 365と完全統合。Outlook、Excel、Teamsなどとシームレスに連携。</p>
                    <div class="mt-4 grid grid-cols-2 gap-4 text-sm">
                        <div>
                            <span class="font-bold text-green-600">メリット</span>
                            <ul class="mt-1 text-gray-600 space-y-1">
                                <li>• Microsoft製品との相性抜群</li>
                                <li>• デスクトップ自動化も可能</li>
                                <li>• 企業での導入実績多い</li>
                            </ul>
                        </div>
                        <div>
                            <span class="font-bold text-red-600">デメリット</span>
                            <ul class="mt-1 text-gray-600 space-y-1">
                                <li>• Microsoft以外との連携はやや弱い</li>
                                <li>• 一部機能は有料ライセンス必要</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">Google製ツール</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-xl text-violet-600">Google Apps Script</h3>
                <p class="text-sm text-gray-500 mt-1">Googleサービスを自動化するスクリプト言語</p>
                <p class="text-sm text-gray-600 mt-4">Gmail、スプレッドシート、ドキュメント、カレンダーなどを自動化。JavaScriptベースで無料。</p>
                <div class="mt-4 bg-violet-50 p-4 rounded">
                    <p class="text-sm font-bold mb-2">こんな自動化ができる：</p>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• スプレッドシートのデータを自動集計</li>
                        <li>• フォーム回答を自動でメール通知</li>
                        <li>• 定期的にレポートを自動生成</li>
                        <li>• Gmailの自動振り分け・返信</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-violet-200">ツール選びのポイント</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">使うサービスで選ぶ</h4>
                    <p class="text-sm text-gray-600">Microsoft中心→Power Automate<br>Google中心→Apps Script<br>様々なサービス→Zapier/Make</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">スキルで選ぶ</h4>
                    <p class="text-sm text-gray-600">プログラミング不可→Zapier<br>少しできる→Make<br>できる→Apps Script/API</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">予算で選ぶ</h4>
                    <p class="text-sm text-gray-600">無料重視→Apps Script<br>少額OK→Zapier/Make無料プラン<br>企業利用→Power Automate</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-violet-600 mb-2">複雑さで選ぶ</h4>
                    <p class="text-sm text-gray-600">シンプル→Zapier<br>複雑なフロー→Make<br>高度なカスタマイズ→コード</p>
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
                        <span>Zapier：汎用的で使いやすい、初心者におすすめ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>Make：複雑なフローを視覚的に設計したい方向け</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>Power Automate：Microsoft製品を多用する企業向け</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-violet-600 mr-2">✓</span>
                        <span>Apps Script：Googleサービス中心なら無料で高度な自動化</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="automation-types.php" class="flex items-center text-gray-600 hover:text-violet-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：自動化の種類
            </a>
            <a href="automation-planning.php" class="flex items-center bg-violet-600 text-white px-6 py-3 rounded-lg hover:bg-violet-700">
                次へ：自動化計画の立て方
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
