<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" encoding="UTF-8"/>

  <xsl:template match="/">
    <html>
      <head>
        <title>Calendrier de soumission</title>
        <style>
          table {
            width: 100%;
            border-collapse: collapse;
          }
          th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
          }
          th {
            background-color: #f2f2f2;
          }
        </style>
      </head>
      <body>
        <h2>Calendrier de soumission</h2>
        <select id="theme">
          <option value="Thème 1">Thème 1</option>
          <option value="Thème 2">Thème 2</option>
          <!-- Ajouter les options pour les autres thèmes -->
        </select>
        <table id="calendrier">
          <tr>
            <th>Heure</th>
            <th>Soumission</th>
          </tr>
          <xsl:apply-templates select="/soumissions/soumission"/>
        </table>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="soumission">
    <!-- Vérifier si la soumission correspond au thème sélectionné -->
    <xsl:if test="theme = //select[@id='theme']/option[@selected='selected']/text()">
      <!-- Calculer l'heure de la soumission -->
      <xsl:variable name="heure">
        <xsl:value-of select="(position() - 1) mod 4 * 15"/>
      </xsl:variable>
      <tr>
        <td>
          <!-- Afficher l'heure -->
          <xsl:value-of select="concat(format-number(floor($heure div 60), '00'), ':', format-number($heure mod 60, '00'))"/>
          h - 
          <xsl:value-of select="concat(format-number(floor(($heure + 15) div 60), '00'), ':', format-number(($heure + 15) mod 60, '00'))"/>
          h
        </td>
        <td>
          <!-- Afficher les détails de la soumission -->
          <xsl:value-of select="concat(nom, ' ', prenom, ' - ', title)"/>
        </td>
      </tr>
    </xsl:if>
  </xsl:template>

</xsl:stylesheet>
