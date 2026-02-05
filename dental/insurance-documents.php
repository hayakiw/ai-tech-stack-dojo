<?php
$page_title = '保険請求・書類作成 - AI×歯科医院経営 | AI Tech Stack';
$current_page = 'operation';
$section_name = '第4部：経営・運営効率化';
$step_number = 13;
$total_steps = 14;

include 'includes/header.php';
include 'includes/progress.php';
?>

<main class="container mx-auto px-6 py-12 max-w-4xl">
    <h1 class="text-4xl font-bold mb-8">保険請求・書類作成</h1>

    <div class="bg-cyan-50 border-l-4 border-cyan-500 p-6 mb-8">
        <p class="text-lg">レセプト業務や各種書類作成の効率化にAIを活用。正確で迅速な事務処理のためのプロンプト活用法を学びます。</p>
    </div>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">レセプト業務のサポート</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">レセプト点検のチェックリスト</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        歯科レセプト点検用のチェックリストを作成してください。<br><br>
                        【含める項目】<br>
                        ・患者情報の確認（氏名、保険証番号など）<br>
                        ・傷病名と治療内容の整合性<br>
                        ・算定ルールの確認ポイント<br>
                        ・よくある返戻・査定事例<br>
                        ・提出前の最終確認事項<br><br>
                        【条件】<br>
                        ・チェックボックス形式<br>
                        ・新人でも使えるよう分かりやすく
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">返戻・査定への対応文</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        レセプト返戻への再請求時の添付文書を作成してください。<br><br>
                        【返戻理由】傷病名との関連が不明確<br>
                        【治療内容】根管治療<br><br>
                        【条件】<br>
                        ・丁寧でフォーマルな文章<br>
                        ・治療の必要性を明確に説明<br>
                        ・再請求の根拠を示す
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-yellow-50 p-4 rounded-lg mt-4">
            <p class="text-sm text-yellow-700"><strong>注意：</strong>レセプト業務は専門知識が必要です。AIの出力は参考として使い、最終確認は専門スタッフが行ってください。</p>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">紹介状・診療情報提供書</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">紹介状のひな型</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        歯科医院から口腔外科への紹介状のひな型を作成してください。<br><br>
                        【紹介理由】埋伏智歯の抜歯依頼<br><br>
                        【含める項目】<br>
                        ・患者情報<br>
                        ・主訴<br>
                        ・現病歴<br>
                        ・画像所見<br>
                        ・紹介理由<br>
                        ・依頼事項<br>
                        ・添付資料<br><br>
                        【条件】<br>
                        ・医療機関間で使用する正式な形式<br>
                        ・簡潔で必要な情報を網羅
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">診療情報提供書（返書）</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        紹介元医療機関への返書（診療情報提供書）を作成してください。<br><br>
                        【治療内容】埋伏智歯の抜歯<br>
                        【経過】問題なく抜歯完了<br><br>
                        【含める項目】<br>
                        ・紹介へのお礼<br>
                        ・実施した治療内容<br>
                        ・術後の経過<br>
                        ・今後の治療方針<br>
                        ・依頼事項（あれば）
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">その他の書類作成</h2>

        <div class="space-y-6">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">診断書</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        歯科治療に関する診断書のひな型を作成してください。<br><br>
                        【用途】保険請求用の診断書<br><br>
                        【含める項目】<br>
                        ・患者情報<br>
                        ・傷病名<br>
                        ・治療開始日<br>
                        ・治療内容<br>
                        ・治療期間<br>
                        ・治療費の概算<br>
                        ・医師所見<br><br>
                        【条件】<br>
                        ・正式な書式<br>
                        ・必要項目を漏れなく記載
                    </p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-lg mb-4 text-cyan-600">治療計画書</h3>
                <div class="bg-gray-100 p-4 rounded mb-4">
                    <p class="text-sm font-mono">
                        自費治療（インプラント）の治療計画書を作成してください。<br><br>
                        【含める項目】<br>
                        ・患者情報<br>
                        ・現在の口腔内状態<br>
                        ・治療方針<br>
                        ・治療の流れとスケジュール<br>
                        ・費用の内訳<br>
                        ・保証内容<br>
                        ・リスク・注意事項<br>
                        ・署名欄<br><br>
                        【条件】<br>
                        ・患者さんに渡すことを想定<br>
                        ・分かりやすく見やすいレイアウト
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mb-12">
        <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-cyan-200">書類作成のポイント</h2>

        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">テンプレート化</h4>
                    <p class="text-sm text-gray-600">よく使う書類はAIでひな型を作り、医院のテンプレートとして保存。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">個人情報の取り扱い</h4>
                    <p class="text-sm text-gray-600">AIに入力する際は、実際の患者情報ではなくダミーデータを使用。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">専門家の確認</h4>
                    <p class="text-sm text-gray-600">法的書類や医療文書は、必ず専門家が内容を確認。</p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex items-start">
                <span class="text-cyan-500 mr-3">✓</span>
                <div>
                    <h4 class="font-bold">最新情報の反映</h4>
                    <p class="text-sm text-gray-600">診療報酬改定などの変更があれば、テンプレートも更新。</p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-gray-100 p-6 rounded-lg mb-8">
        <h3 class="font-bold text-lg mb-3">💡 ポイント</h3>
        <p class="text-gray-700">書類作成は時間がかかる業務ですが、AIを活用すれば大幅に効率化できます。ひな型をベースに、個別の情報を追加していく形で活用しましょう。</p>
    </div>

    <div class="flex justify-between items-center pt-8 border-t">
        <a href="staff-training.php" class="flex items-center text-gray-600 hover:text-cyan-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            前へ：スタッフ教育・マニュアル
        </a>
        <a href="glossary.php" class="flex items-center bg-cyan-600 text-white px-6 py-3 rounded-lg hover:bg-cyan-700 transition">
            次へ：用語集
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
