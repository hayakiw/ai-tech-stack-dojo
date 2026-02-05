<?php
$page_title = '患者コミュニケーション - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'patient';
$section_name = '第3部：患者対応・診療支援';
$step_number = 8;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">患者コミュニケーション</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">患者さんに分かりやすく説明し、信頼関係を築くためのコミュニケーション術をAIで効率化。説明資料や患者向けコンテンツの作成方法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">治療説明文の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">分かりやすい説明文プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    患者さん向けの治療説明文を作成してください。<br><br>
                    【治療内容】根管治療（神経の治療）<br><br>
                    【説明に含める内容】<br>
                    ・なぜこの治療が必要か<br>
                    ・治療の流れ（ステップバイステップ）<br>
                    ・所要時間と回数の目安<br>
                    ・痛みへの配慮<br>
                    ・治療後の注意点<br><br>
                    【条件】<br>
                    ・専門用語は避けるか、使う場合は説明を加える<br>
                    ・安心感を与える優しい口調<br>
                    ・400文字程度
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">よくある質問（FAQ）の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">FAQ作成プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科医院のホームページ用FAQを作成してください。<br><br>
                    【カテゴリ】<br>
                    1. 初診について<br>
                    2. 治療について<br>
                    3. 費用について<br>
                    4. 予防・メンテナンスについて<br><br>
                    【各カテゴリ】<br>
                    よくある質問と回答を5つずつ作成してください。<br><br>
                    【条件】<br>
                    ・患者さんの不安を解消する内容<br>
                    ・専門用語は分かりやすく説明<br>
                    ・親しみやすいトーン
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">お子さん・高齢者への説明</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">子ども向け説明</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        小さなお子さん（5〜7歳）向けに、虫歯治療の説明を作成してください。<br><br>
                        【条件】<br>
                        ・怖がらせない表現<br>
                        ・やさしい言葉で<br>
                        ・比喩を使って分かりやすく<br>
                        ・頑張ったらご褒美があることを伝える<br>
                        ・200文字程度
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">高齢者向け説明</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        高齢の患者さん向けに、入れ歯のお手入れ方法を説明してください。<br><br>
                        【条件】<br>
                        ・ゆっくり読める文章<br>
                        ・手順を箇条書きで明確に<br>
                        ・注意点を分かりやすく<br>
                        ・大きめの文字で印刷することを想定<br>
                        ・300文字程度
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">クレーム対応</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">クレーム対応の返答例</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    以下のクレームに対する対応文を作成してください。<br><br>
                    【クレーム内容】<br>
                    「治療後に痛みが続いている。説明と違う。」<br><br>
                    【条件】<br>
                    ・まず謝罪と心配の気持ちを伝える<br>
                    ・すぐに対応する姿勢を示す<br>
                    ・来院を促す<br>
                    ・誠実で丁寧なトーン<br>
                    ・電話対応を想定
                </p>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">AIで作成した説明文は「たたき台」として活用し、患者さんの状況に合わせてカスタマイズしましょう。医学的な正確性は必ず専門家が確認してください。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="web-advertising.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：Web広告・チラシ作成
        </a>
        <a href="treatment-explanation.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：治療説明・同意書作成
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
