<?php
$page_title = 'E2Eテストの自動生成 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'testing';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第5部：AIとテスト・品質管理';
$step_number = 16;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">E2Eテストの自動生成</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">Playwrightを使ったE2Eテストをユーザーシナリオから自動生成します。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">シナリオからテスト生成</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のユーザーシナリオに対するPlaywrightテストを生成してください。

【シナリオ: ユーザー登録からログインまで】
1. トップページにアクセス
2. 「新規登録」ボタンをクリック
3. メールアドレスとパスワードを入力
4. 「登録」ボタンをクリック
5. 登録完了メッセージが表示される
6. 自動的にダッシュボードにリダイレクト

【URL】
- トップ: /
- 登録: /register
- ダッシュボード: /dashboard</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">生成されるテスト</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>import { test, expect } from '@playwright/test';

test('ユーザー登録からログインまでの流れ', async ({ page }) => {
  // 1. トップページにアクセス
  await page.goto('/');

  // 2. 新規登録ボタンをクリック
  await page.getByRole('link', { name: '新規登録' }).click();
  await expect(page).toHaveURL('/register');

  // 3. フォーム入力
  await page.getByLabel('メールアドレス').fill('test@example.com');
  await page.getByLabel('パスワード').fill('password123');

  // 4. 登録ボタンをクリック
  await page.getByRole('button', { name: '登録' }).click();

  // 5. 完了メッセージを確認
  await expect(page.getByText('登録が完了しました')).toBeVisible();

  // 6. ダッシュボードにリダイレクト
  await expect(page).toHaveURL('/dashboard');
});</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">Page Object Model</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">保守性の高いテスト構造</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>このテストをPage Object Modelパターンにリファクタリングしてください。

- LoginPage
- DashboardPage

各ページクラスにはセレクタとアクションをカプセル化してください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">CI連携</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">GitHub Actions設定</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>- name: Run Playwright tests
  run: npx playwright test
- name: Upload test results
  uses: actions/upload-artifact@v3
  with:
    name: playwright-report
    path: playwright-report/</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>シナリオベース</strong> - ユーザー操作を記述してテスト生成</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>Page Object</strong> - 保守性を高める構造化</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>CI統合</strong> - 自動実行でリグレッション防止</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="ai-testing.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                テストコード生成
            </a>
            <a href="ai-code-review.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：AIコードレビュー
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
