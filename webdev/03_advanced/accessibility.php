<?php
$page_title = 'アクセシビリティ対応 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'architecture';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第4部：AIとフロントエンド高度化';
$step_number = 14;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">アクセシビリティ対応</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">AIにアクセシビリティ問題を検出させ、修正を依頼することで、すべてのユーザーが使いやすいアプリを作ります。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">AIにa11y診断を依頼</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">コンポーネントの診断</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のコンポーネントのアクセシビリティ問題を指摘してください。

```tsx
&lt;div onClick={handleClick} className="button"&gt;
  &lt;img src="/icon.png" /&gt;
  送信
&lt;/div&gt;
```

WCAG 2.1 レベルAAに準拠するよう修正してください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold text-red-600 mb-2">問題点</h3>
                <ul class="text-sm space-y-1 mb-4">
                    <li>✗ div は button ではない（キーボード操作不可）</li>
                    <li>✗ img に alt がない</li>
                    <li>✗ role 属性がない</li>
                </ul>
                <h3 class="font-bold text-green-600 mb-2">修正後</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>&lt;button
  onClick={handleClick}
  className="button"
  aria-label="フォームを送信"
&gt;
  &lt;img src="/icon.png" alt="" aria-hidden="true" /&gt;
  送信
&lt;/button&gt;</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">主要なチェックポイント</h2>
            <div class="grid md:grid-cols-2 gap-4">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">キーボード操作</h3>
                    <ul class="text-sm space-y-1">
                        <li>・Tabで全要素にフォーカス可能</li>
                        <li>・Enterでボタン・リンクを実行</li>
                        <li>・Escapeでモーダルを閉じる</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">スクリーンリーダー</h3>
                    <ul class="text-sm space-y-1">
                        <li>・適切な見出し階層（h1→h2→h3）</li>
                        <li>・画像にalt属性</li>
                        <li>・フォームにlabel</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">色とコントラスト</h3>
                    <ul class="text-sm space-y-1">
                        <li>・コントラスト比 4.5:1 以上</li>
                        <li>・色だけで情報を伝えない</li>
                    </ul>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h3 class="font-bold mb-2">ARIA属性</h3>
                    <ul class="text-sm space-y-1">
                        <li>・role で要素の役割を明示</li>
                        <li>・aria-label で説明を追加</li>
                        <li>・aria-live で動的更新を通知</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">自動テスト</h2>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">jest-axe でテスト</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>import { axe, toHaveNoViolations } from 'jest-axe';

expect.extend(toHaveNoViolations);

test('アクセシビリティ違反がないこと', async () => {
  const { container } = render(&lt;MyComponent /&gt;);
  const results = await axe(container);
  expect(results).toHaveNoViolations();
});</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>AIに診断を依頼</strong> - 問題点を洗い出す</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>セマンティックHTML</strong> - 適切な要素を使う</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>自動テスト</strong> - jest-axe で継続的に検証</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="complex-ui.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                複雑なUIの実装
            </a>
            <a href="ai-testing.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：テストコード生成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
