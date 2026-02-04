<?php
$page_title = '契約・請求書の作成 - AI×副業・フリーランス | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 11;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">契約・請求書の作成</h1>

        <!-- イントロ -->
        <div class="bg-rose-50 border-l-4 border-rose-500 p-6 mb-8">
            <p class="text-lg">副業でもビジネスはビジネス。トラブルを防ぎ、確実に報酬を受け取るために、契約書と請求書の基本を押さえましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">契約書の重要性</h2>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-lg mb-4 text-rose-600">契約書がないとこんなトラブルが...</h3>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">✗</span>
                        <span>「そんな条件だったっけ？」と認識の相違</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">✗</span>
                        <span>無限に修正を要求される</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">✗</span>
                        <span>報酬が支払われない</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-500 mr-2">✗</span>
                        <span>著作権の帰属でもめる</span>
                    </li>
                </ul>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-rose-600">契約書に含めるべき項目</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div>
                        <ul class="space-y-1 text-gray-600">
                            <li>✓ 業務内容（具体的に）</li>
                            <li>✓ 納品物の定義</li>
                            <li>✓ 納期</li>
                            <li>✓ 報酬額と支払い条件</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="space-y-1 text-gray-600">
                            <li>✓ 修正回数の上限</li>
                            <li>✓ 著作権の帰属</li>
                            <li>✓ 秘密保持</li>
                            <li>✓ 解約条件</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">AIで契約書ドラフト作成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                    <pre class="whitespace-pre-wrap">以下の条件でフリーランス向け業務委託契約書のドラフトを作成してください。

【業務内容】{具体的な業務内容}
【納期】{納期}
【報酬】{金額}（税込/税別）
【支払い条件】納品後{X}日以内に銀行振込
【修正回数】{X}回まで無料、以降は追加料金
【著作権】納品物の著作権はクライアントに帰属

契約書として必要な条項を含めて作成してください。
※実際の契約時は専門家への確認を推奨</pre>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">請求書の書き方</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-rose-600">請求書に必要な項目</h3>
                <div class="space-y-3 text-sm">
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">宛先</span>
                        <span class="text-gray-600">クライアントの会社名・担当者名</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">発行者</span>
                        <span class="text-gray-600">自分の名前・住所・連絡先</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">請求番号</span>
                        <span class="text-gray-600">管理用の番号（例：2024-001）</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">発行日</span>
                        <span class="text-gray-600">請求書を発行した日付</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">支払期限</span>
                        <span class="text-gray-600">いつまでに支払うか</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">品目・金額</span>
                        <span class="text-gray-600">何をいくらで請求するか</span>
                    </div>
                    <div class="flex justify-between border-b pb-2">
                        <span class="font-bold">消費税</span>
                        <span class="text-gray-600">税抜金額と税込金額</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="font-bold">振込先</span>
                        <span class="text-gray-600">銀行名・支店名・口座番号・名義</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション4 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">便利なツール</h2>

            <div class="grid md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-rose-600 mb-2">Misoca</h4>
                    <p class="text-sm text-gray-600">無料で請求書作成。クラウド管理。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-rose-600 mb-2">freee</h4>
                    <p class="text-sm text-gray-600">会計ソフトと連携。確定申告も楽に。</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow text-center">
                    <h4 class="font-bold text-rose-600 mb-2">クラウドサイン</h4>
                    <p class="text-sm text-gray-600">電子契約で手間削減。</p>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-rose-200">まとめ</h2>
            <div class="bg-rose-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>契約書でトラブルを未然に防ぐ</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>業務内容、報酬、修正回数を明記</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>請求書は必要項目を漏れなく記載</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-rose-600 mr-2">✓</span>
                        <span>Misoca、freeeなどのツールを活用</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="client-communication.php" class="flex items-center text-gray-600 hover:text-rose-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：クライアントコミュニケーション
            </a>
            <a href="scaling.php" class="flex items-center bg-rose-600 text-white px-6 py-3 rounded-lg hover:bg-rose-700">
                次へ：収入アップ・スケール
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
