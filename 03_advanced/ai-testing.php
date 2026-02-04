<?php
$page_title = 'テストコード生成 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'testing';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第5部：AIとテスト・品質管理';
$step_number = 15;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">テストコード生成</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">AIに高品質なテストコードを生成させる方法を学びます。単体テスト、統合テストを効率的に作成しましょう。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">テスト生成の依頼方法</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">効果的なプロンプト</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下の関数のテストを書いてください。

```python
def calculate_discount(price: int, user_type: str) -> int:
    if user_type == "premium":
        return int(price * 0.8)
    elif user_type == "member":
        return int(price * 0.9)
    return price
```

【テストケース】
1. 正常系: 各ユーザータイプで正しい割引
2. 境界値: price = 0, price = 1
3. 異常系: 無効なユーザータイプ
4. エッジケース: 小数点以下の切り捨て確認

pytest を使用してください。</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">生成されるテスト例</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>import pytest
from app.utils import calculate_discount

class TestCalculateDiscount:
    def test_premium_user_gets_20_percent_off(self):
        assert calculate_discount(1000, "premium") == 800

    def test_member_gets_10_percent_off(self):
        assert calculate_discount(1000, "member") == 900

    def test_regular_user_no_discount(self):
        assert calculate_discount(1000, "regular") == 1000

    def test_zero_price(self):
        assert calculate_discount(0, "premium") == 0

    @pytest.mark.parametrize("price,expected", [
        (999, 799),  # 999 * 0.8 = 799.2 → 799
        (1, 0),      # 1 * 0.8 = 0.8 → 0
    ])
    def test_decimal_truncation(self, price, expected):
        assert calculate_discount(price, "premium") == expected</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">テストカバレッジの向上</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">不足テストを洗い出す</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のコードとテストを見て、
テストされていないケースを指摘してください。

【本体コード】
(コードを貼り付け)

【既存テスト】
(テストを貼り付け)

不足しているテストケースを追加してください。</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">モックの生成</h2>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">外部依存のモック</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>from unittest.mock import Mock, patch

@patch('app.services.email_service.send_email')
def test_user_registration_sends_email(mock_send):
    mock_send.return_value = True

    result = register_user("test@example.com")

    assert result.success
    mock_send.assert_called_once_with(
        to="test@example.com",
        subject="Welcome!"
    )</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>テストケースを明示</strong> - 正常系、異常系、境界値を指定</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>parametrize</strong> - 複数パターンを効率的にテスト</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>モック活用</strong> - 外部依存を分離</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="accessibility.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                アクセシビリティ対応
            </a>
            <a href="e2e-testing.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：E2Eテストの自動生成
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
