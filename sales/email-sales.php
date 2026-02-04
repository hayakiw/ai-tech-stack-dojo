<?php
$page_title = 'メール営業 - AI×営業・セールス | AI Tech Stack';
$current_page = 'practice';
$section_name = '第3部：実践テクニック';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">メール営業</h1>

        <!-- イントロ -->
        <div class="bg-blue-50 border-l-4 border-blue-500 p-6 mb-8">
            <p class="text-lg">メールは営業の基本ツール。AIを活用して、開封され、返信される効果的なメールを作成しましょう。</p>
        </div>

        <!-- セクション1 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">効果的なメールの構成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-500 pl-4">
                        <h4 class="font-bold">件名</h4>
                        <p class="text-sm text-gray-600">開封率を決める最重要ポイント。具体的でメリットが伝わる15〜30文字</p>
                    </div>
                    <div class="border-l-4 border-blue-400 pl-4">
                        <h4 class="font-bold">冒頭</h4>
                        <p class="text-sm text-gray-600">なぜ連絡したのか、相手との接点を明確に</p>
                    </div>
                    <div class="border-l-4 border-indigo-500 pl-4">
                        <h4 class="font-bold">本文</h4>
                        <p class="text-sm text-gray-600">相手の課題と、それを解決できる理由を簡潔に</p>
                    </div>
                    <div class="border-l-4 border-indigo-400 pl-4">
                        <h4 class="font-bold">CTA（行動喚起）</h4>
                        <p class="text-sm text-gray-600">次のアクションを1つだけ、明確に提示</p>
                    </div>
                    <div class="border-l-4 border-purple-500 pl-4">
                        <h4 class="font-bold">署名</h4>
                        <p class="text-sm text-gray-600">連絡先と簡単なプロフィール</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション2 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">AIでメールを作成</h2>

            <div class="space-y-6">
                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-blue-600">新規アプローチメール</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">新規顧客へのアプローチメールを作成してください。

【送信先】
・製造業の生産管理部長
・従業員500名規模の企業

【提案内容】
・生産管理システムのデモ依頼
・AIによる需要予測が強み

【接点】
・展示会でブースに立ち寄っていただいた

【条件】
・件名は20文字以内
・本文は200文字以内
・アポイント取得が目的

3パターン作成してください。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-blue-600">フォローアップメール</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">商談後のフォローアップメールを作成してください。

【商談内容】
・生産管理システムのデモを実施
・在庫削減と属人化解消に興味あり
・他社製品と比較検討中

【次のアクション】
・2週間後に再度ご連絡予定
・比較資料を送付

【トーン】
・丁寧だが親しみやすく
・押し付けがましくない

お礼と次回アクションを明確に伝える内容でお願いします。</pre>
                    </div>
                </div>

                <div class="bg-white p-6 rounded-lg shadow">
                    <h3 class="font-bold text-lg mb-4 text-blue-600">返信がない場合のリマインド</h3>
                    <div class="bg-gray-800 text-gray-100 p-4 rounded text-sm">
                        <pre class="whitespace-pre-wrap">1週間前に送ったメールへの返信がありません。
リマインドメールを作成してください。

【状況】
・デモ後に見積書を送付済み
・ご検討いただくと言っていた

【条件】
・催促感を出さない
・新しい価値（情報）を追加
・短く簡潔に

2パターン作成してください。</pre>
                    </div>
                </div>
            </div>
        </section>

        <!-- セクション3 -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">件名のコツ</h2>

            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-green-600 mb-2">良い例</h4>
                    <ul class="text-sm space-y-2 text-gray-600">
                        <li>• 【展示会御礼】生産管理のご相談</li>
                        <li>• 在庫コスト20%削減の事例ご紹介</li>
                        <li>• 〇〇様ご紹介｜5分でわかる△△</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h4 class="font-bold text-red-600 mb-2">悪い例</h4>
                    <ul class="text-sm space-y-2 text-gray-600">
                        <li>• ご提案 （曖昧すぎる）</li>
                        <li>• 【重要】必ずお読みください （煽りすぎ）</li>
                        <li>• 弊社サービスのご案内 （一方的）</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-blue-200">まとめ</h2>
            <div class="bg-blue-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>件名が最重要。具体的でメリットが伝わる内容に</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>本文は短く、相手の課題に焦点を当てる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>CTAは1つだけ、明確に</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-blue-600 mr-2">✓</span>
                        <span>AIで複数パターン作成し、最適なものを選ぶ</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-proposal.php" class="flex items-center text-gray-600 hover:text-blue-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：AIで提案書作成
            </a>
            <a href="online-sales.php" class="flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700">
                次へ：オンライン商談
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
