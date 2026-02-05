    <div class="bg-white border-b">
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between text-sm">
                <span class="text-gray-600"><?php echo htmlspecialchars($section_name); ?></span>
                <span class="text-lime-600 font-bold"><?php echo $step_number; ?> / <?php echo $total_steps; ?></span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mt-2">
                <div class="bg-lime-500 h-2 rounded-full transition-all duration-300" style="width: <?php echo ($step_number / $total_steps) * 100; ?>%"></div>
            </div>
        </div>
    </div>
