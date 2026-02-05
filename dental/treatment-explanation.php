<?php
$page_title = '治療説明・同意書作成 - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'patient';
$section_name = '第3部：患者対応・診療支援';
$step_number = 9;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">治療説明・同意書作成</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">インフォームドコンセントに必要な説明資料や同意書をAIで効率的に作成。患者さんの理解と同意を得るための資料作りを学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">治療別説明資料の作成</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">インプラント治療の説明資料</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        インプラント治療の患者説明資料を作成してください。<br><br>
                        【含める内容】<br>
                        ・インプラントとは何か<br>
                        ・メリットとデメリット<br>
                        ・治療の流れ（期間含む）<br>
                        ・費用の目安<br>
                        ・リスクと合併症<br>
                        ・術後のケア方法<br>
                        ・よくある質問<br><br>
                        【条件】<br>
                        ・専門用語には説明を追加<br>
                        ・A4で2〜3ページ程度<br>
                        ・リスクは隠さず正直に記載
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">矯正治療の説明資料</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        矯正治療の患者説明資料を作成してください。<br><br>
                        【治療の種類】<br>
                        ・ワイヤー矯正<br>
                        ・マウスピース矯正<br><br>
                        【含める内容】<br>
                        ・それぞれの特徴と違い<br>
                        ・適応症例<br>
                        ・治療期間の目安<br>
                        ・通院頻度<br>
                        ・費用の目安<br>
                        ・日常生活での注意点
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">同意書のひな型作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">治療同意書プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    歯科治療の同意書のひな型を作成してください。<br><br>
                    【治療内容】抜歯<br><br>
                    【含める項目】<br>
                    ・治療内容の説明を受けたことの確認<br>
                    ・治療の必要性<br>
                    ・代替治療の選択肢<br>
                    ・起こりうるリスク・合併症<br>
                    ・術後の注意事項<br>
                    ・質問の機会があったことの確認<br>
                    ・患者署名欄<br>
                    ・日付欄<br><br>
                    【条件】<br>
                    ・法的に有効な形式<br>
                    ・患者が理解しやすい文章
                </p>
            </div>
        </div>

        <div class="bg-yellow-50 p-4 rounded-lg mt-4">
            <p class="text-sm text-yellow-700"><strong>注意：</strong>同意書は法的文書です。AIで作成したひな型は、必ず弁護士や専門家に確認してもらってください。</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">術後指導書の作成</h2>

        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="font-bold text-lg mb-4 text-cyan-600">術後指導書プロンプト</h3>
            <div class="bg-gray-100 p-4 rounded mb-4">
                <p class="text-sm font-mono">
                    抜歯後の注意事項（術後指導書）を作成してください。<br><br>
                    【含める内容】<br>
                    ・当日の注意事項<br>
                    ・食事について<br>
                    ・うがい・歯磨きについて<br>
                    ・出血が続く場合の対処<br>
                    ・痛みがある場合の対処<br>
                    ・腫れについて<br>
                    ・すぐに連絡すべき症状<br>
                    ・連絡先<br><br>
                    【条件】<br>
                    ・箇条書きで分かりやすく<br>
                    ・患者さんが自宅で見返せる形式<br>
                    ・A4で1ページ程度
                </p>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">説明のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">選択肢を提示する</h4>
                    <p class="text-sm text-gray-600">「この治療しかない」ではなく、代替案も含めて説明。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">リスクは正直に</h4>
                    <p class="text-sm text-gray-600">起こりうるリスクや合併症を隠さず説明することで信頼関係を構築。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">質問の時間を確保</h4>
                    <p class="text-sm text-gray-600">患者さんが疑問を解消できる時間を必ず設ける。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">書面で渡す</h4>
                    <p class="text-sm text-gray-600">口頭説明だけでなく、資料を渡して自宅で確認できるように。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">説明資料や同意書は、患者さんとの信頼関係を築く重要なツールです。AIで効率的に作成し、医院のオリジナルテンプレートとして活用しましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="patient-communication.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：患者コミュニケーション
        </a>
        <a href="recall-management.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：リコール・予防管理
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
