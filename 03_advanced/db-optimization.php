<?php
$page_title = 'データベース最適化 - AI駆動開発 上級編 | AI Tech Stack';
$current_page = 'architecture';
$extra_styles = '.code-block { background: #1e293b; color: #e2e8f0; }\n        .prompt-box { background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%); border-left: 4px solid #f59e0b; }';
$section_name = '第3部：AIとバックエンド高度化';
$step_number = 10;
$total_steps = 36;

include 'includes/header.php';
include 'includes/progress.php';
?>
    <main class="container mx-auto px-6 py-12 max-w-4xl">
        <h1 class="text-4xl font-bold mb-8">データベース最適化</h1>

        <div class="bg-orange-50 border-l-4 border-orange-500 p-6 mb-8">
            <p class="text-lg">N+1問題、インデックス設計、クエリ最適化をAIに分析・改善させて、データベースパフォーマンスを向上させます。</p>
        </div>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">N+1問題の検出と解決</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIに分析を依頼</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のコードにN+1問題がありますか？
問題があれば、修正方法を示してください。

```python
def get_posts_with_authors():
    posts = db.query(Post).all()
    result = []
    for post in posts:
        result.append({
            "title": post.title,
            "author_name": post.author.name  # ← ここ
        })
    return result
```</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h3 class="font-bold text-red-600 mb-2">問題のあるコード</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto mb-4">
<pre class="text-red-400"># 1回 + N回のクエリが発生
posts = db.query(Post).all()  # 1回
for post in posts:
    post.author.name  # N回（投稿数分）</pre>
                </div>
                <h3 class="font-bold text-green-600 mb-2">改善後</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre class="text-green-400"># joinedloadで1回のクエリに
from sqlalchemy.orm import joinedload

posts = db.query(Post).options(
    joinedload(Post.author)
).all()</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">インデックス設計</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">AIへの指示</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のクエリパターンに対して、適切なインデックスを提案してください。

【よく実行されるクエリ】
1. WHERE user_id = ? AND status = 'active'
2. WHERE created_at > ? ORDER BY created_at DESC
3. WHERE title LIKE '%keyword%'

【テーブル】tasks（id, user_id, title, status, created_at）</pre>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="font-bold mb-3">推奨インデックス</h3>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>-- 複合インデックス（クエリ1用）
CREATE INDEX idx_tasks_user_status ON tasks(user_id, status);

-- 単一インデックス（クエリ2用）
CREATE INDEX idx_tasks_created_at ON tasks(created_at DESC);

-- 全文検索用（クエリ3用、LIKEの前方一致以外は効かない）
-- MySQLの場合: FULLTEXT INDEX
CREATE FULLTEXT INDEX idx_tasks_title ON tasks(title);</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">スロークエリの分析</h2>

            <div class="prompt-box p-4 rounded mb-6">
                <h4 class="font-bold mb-2">EXPLAINの結果を分析させる</h4>
                <div class="code-block p-4 rounded font-mono text-sm overflow-x-auto">
<pre>以下のEXPLAIN結果を分析して、改善案を教えてください。

EXPLAIN SELECT * FROM orders
WHERE user_id = 123 AND created_at > '2024-01-01';

| type | key  | rows   | Extra       |
|------|------|--------|-------------|
| ALL  | NULL | 500000 | Using where |</pre>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6 pb-2 border-b-2 border-orange-200">まとめ</h2>
            <div class="bg-orange-50 p-6 rounded-lg">
                <ul class="space-y-3">
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>N+1問題</strong> - joinedload/selectinloadで解決</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>インデックス</strong> - クエリパターンに合わせて設計</span></li>
                    <li class="flex items-start"><span class="text-orange-600 mr-2">✓</span><span><strong>EXPLAIN</strong> - 実行計画を確認して最適化</span></li>
                </ul>
            </div>
        </section>

        <div class="flex justify-between items-center pt-8 border-t">
            <a href="cache-strategy.php" class="flex items-center text-gray-600 hover:text-orange-600">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                キャッシュ設計と実装
            </a>
            <a href="advanced-api.php" class="flex items-center bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600">
                次へ：API設計の高度化
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </main>

    
<?php include 'includes/footer.php'; ?>
