<?php
// 進捗バー用の変数
$section_name = $section_name ?? '';
$step_number = $step_number ?? 1;
$total_steps = $total_steps ?? 24;
$progress_percent = ($step_number / $total_steps) * 100;
?>
    <!-- 進捗バー -->
    <div class="bg-white shadow">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between text-sm">
                <span class="text-blue-600 font-bold"><?php echo htmlspecialchars($section_name); ?></span>
                <span class="text-gray-500">Step <?php echo $step_number; ?> / <?php echo $total_steps; ?></span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                <div class="bg-blue-600 h-2 rounded-full" style="width: <?php echo $progress_percent; ?>%"></div>
            </div>
        </div>
    </div>
