
    <h1>Adresse --> Koordinaten --> Karte</h1>
    <form method="post" action="">
        <label for="address">Adresse:</label>
        <input type="text" id="address" name="address" required>
        <button type="submit">Suchen</button>
    </form>

    <?php if (isset($data)): ?>
        <?php if (!empty($data)): ?>
            <h2>Auswahl</h2>
            <form method="POST" action="your_processing_script.php">
                <select id="selery" onchange="showCoordinates(this)">
					<option value="none">Wähle</option>
                    <?php foreach ($data as $place): ?>
                        <option value="<?php echo $place['lat'] . ', ' . $place['lon']; ?>">
                            <?= htmlspecialchars($place['display_name']) ?>
                        </option> 
                    <?php endforeach; ?>
                </select>
                <input type="hidden" name="pos1" id="pos1" value="">
                <p id="coordinates"></p> <!-- Hier werden die Koordinaten angezeigt -->
            </form>
        <?php endif; ?>
    <?php endif; ?>

        
        
        
    <div id="map"></div>
        
        
        
    <?php if (!isset($data) || empty($data)): ?>
        <p>Keine Daten gefunden.</p>
    <?php endif; ?>
