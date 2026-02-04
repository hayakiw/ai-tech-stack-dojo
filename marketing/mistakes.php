<?php
$page_title = 'よくある失敗と対策 - AI×マーケティング入門 | AI Tech Stack';
$current_page = 'support';
$section_name = '第4部：サポート';
$step_number = 14;
$total_steps = 16;

include 'includes/header.php';
include 'includes/progress.php';
?>

    <!-- メインコンテンツ -->
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">よくある失敗と対策</h1>

        <!-- イントロ -->
        <div class="bg-teal-50 border-l-4 border-teal-500 p-6 mb-8">
            <p class="text-lg">AIマーケティングには落とし穴があります。よくある失敗を事前に知っておくことで、効果的にAIを活用できます。</p>
        </div>

        <!-- 失敗1 -->
        <section class="mb-12">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="bg-red-500 text-white px-3 py-1 rounded font-bold mr-3">失敗1</span>
                    <h2 class="text-xl font-bold">AIの出力をそのまま使う</h2>
                </div>

                <div class="bg-red-50 p-4 rounded-lg mb-4">
                    <h3 class="font-bold text-red-600 mb-2">何が問題？</h3>
                    <ul class="text-sm space-y-1">
                        <li>・どこかで見たような、ありきたりな文章になる</li>
                        <li>・ブランドのトーンと合わない</li>
                        <li>・事実と異なる情報が含まれていることも</li>
                        <li>・競合と似たような内容になりがち</li>
                    </ul>
                </div>

                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-bold text-green-600 mb-2">対策</h3>
                    <ul class="text-sm space-y-1">
                        <li>✓ AIの出力は「下書き」として扱う</li>
                        <li>✓ 自社の事例や独自の視点を追加する</li>
                        <li>✓ ブランドガイドラインに合わせて編集する</li>
                        <li>✓ 必ず人間の目でチェックしてから公開</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 失敗2 -->
        <section class="mb-12">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="bg-red-500 text-white px-3 py-1 rounded font-bold mr-3">失敗2</span>
                    <h2 class="text-xl font-bold">事実確認をしない</h2>
                </div>

                <div class="bg-red-50 p-4 rounded-lg mb-4">
                    <h3 class="font-bold text-red-600 mb-2">何が問題？</h3>
                    <ul class="text-sm space-y-1">
                        <li>・AIは自信満々に間違った情報を出すことがある</li>
                        <li>・存在しないデータや統計を作り出すことも</li>
                        <li>・古い情報を最新のように書くことがある</li>
                        <li>・誤情報を公開すると信頼を失う</li>
                    </ul>
                </div>

                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-bold text-green-600 mb-2">対策</h3>
                    <ul class="text-sm space-y-1">
                        <li>✓ 数字、統計、引用は必ず出典を確認</li>
                        <li>✓ 固有名詞（会社名、人名、商品名）を確認</li>
                        <li>✓ 「〇〇によると」という表現は特に注意</li>
                        <li>✓ 不明な情報は削除するか、自分で調べる</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 失敗3 -->
        <section class="mb-12">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="bg-red-500 text-white px-3 py-1 rounded font-bold mr-3">失敗3</span>
                    <h2 class="text-xl font-bold">プロンプトが曖昧</h2>
                </div>

                <div class="bg-red-50 p-4 rounded-lg mb-4">
                    <h3 class="font-bold text-red-600 mb-2">何が問題？</h3>
                    <ul class="text-sm space-y-1">
                        <li>・期待した回答が得られない</li>
                        <li>・何度もやり直しが必要になる</li>
                        <li>・的外れなアウトプットで時間を無駄にする</li>
                    </ul>
                </div>

                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-bold text-green-600 mb-2">対策</h3>
                    <ul class="text-sm space-y-1">
                        <li>✓ ターゲット、目的、トーンを明確に指定</li>
                        <li>✓ 出力形式（文字数、パターン数）を具体的に</li>
                        <li>✓ 良い例・悪い例を示す</li>
                        <li>✓ プロンプトテンプレートを活用する</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 失敗4 -->
        <section class="mb-12">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="bg-red-500 text-white px-3 py-1 rounded font-bold mr-3">失敗4</span>
                    <h2 class="text-xl font-bold">機密情報を入力してしまう</h2>
                </div>

                <div class="bg-red-50 p-4 rounded-lg mb-4">
                    <h3 class="font-bold text-red-600 mb-2">何が問題？</h3>
                    <ul class="text-sm space-y-1">
                        <li>・入力した情報がAIの学習に使われる可能性</li>
                        <li>・顧客の個人情報を流出させるリスク</li>
                        <li>・社外秘の戦略や数字が漏洩する可能性</li>
                    </ul>
                </div>

                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-bold text-green-600 mb-2">対策</h3>
                    <ul class="text-sm space-y-1">
                        <li>✓ 個人情報は絶対に入力しない</li>
                        <li>✓ 具体的な数字は架空の値に置き換える</li>
                        <li>✓ 社名を「A社」などに置き換える</li>
                        <li>✓ 企業向けプラン（データが学習に使われない）を検討</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- 失敗5 -->
        <section class="mb-12">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <span class="bg-red-500 text-white px-3 py-1 rounded font-bold mr-3">失敗5</span>
                    <h2 class="text-xl font-bold">AIに頼りすぎる</h2>
                </div>

                <div class="bg-red-50 p-4 rounded-lg mb-4">
                    <h3 class="font-bold text-red-600 mb-2">何が問題？</h3>
                    <ul class="text-sm space-y-1">
                        <li>・自分で考える力が衰える</li>
                        <li>・顧客理解が浅くなる</li>
                        <li>・独自性のないマーケティングになる</li>
                        <li>・AIがダウンした時に何もできなくなる</li>
                    </ul>
                </div>

                <div class="bg-green-50 p-4 rounded-lg">
                    <h3 class="font-bold text-green-600 mb-2">対策</h3>
                    <ul class="text-sm space-y-1">
                        <li>✓ AIは「アシスタント」として位置づける</li>
                        <li>✓ 最終判断は必ず人間が行う</li>
                        <li>✓ 顧客の声を直接聞く機会を大切に</li>
                        <li>✓ AIなしでもできるスキルを磨き続ける</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- チェックリスト -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">公開前チェックリスト</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <ul class="space-y-3">
                    <li class="flex items-center">
                        <input type="checkbox" class="mr-3 w-5 h-5">
                        <span>事実（数字、統計、引用）を確認したか</span>
                    </li>
                    <li class="flex items-center">
                        <input type="checkbox" class="mr-3 w-5 h-5">
                        <span>誇大表現や景品表示法に抵触する表現がないか</span>
                    </li>
                    <li class="flex items-center">
                        <input type="checkbox" class="mr-3 w-5 h-5">
                        <span>ブランドのトーン&マナーに合っているか</span>
                    </li>
                    <li class="flex items-center">
                        <input type="checkbox" class="mr-3 w-5 h-5">
                        <span>ターゲットにとって価値ある内容か</span>
                    </li>
                    <li class="flex items-center">
                        <input type="checkbox" class="mr-3 w-5 h-5">
                        <span>独自性があるか（AIっぽくないか）</span>
                    </li>
                    <li class="flex items-center">
                        <input type="checkbox" class="mr-3 w-5 h-5">
                        <span>誤字脱字、文法ミスがないか</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- まとめ -->
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-teal-200">まとめ</h2>
            <div class="bg-teal-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIの出力は下書きとして扱い、必ず編集する</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>事実確認を怠らない</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>具体的なプロンプトで効率を上げる</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>機密情報は入力しない</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-teal-600 mr-2">✓</span>
                        <span>AIはアシスタント。主役は人間</span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- ナビゲーション -->
        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ad-ai.php" class="flex items-center text-gray-600 hover:text-teal-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                前へ：広告×AI
            </a>
            <a href="next-steps.php" class="flex items-center bg-teal-600 text-white px-6 py-3 rounded-lg hover:bg-teal-700">
                次へ：次のステップ
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </main>

<?php include 'includes/footer.php'; ?>
