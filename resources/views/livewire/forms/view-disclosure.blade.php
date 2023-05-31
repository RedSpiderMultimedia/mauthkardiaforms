<style type="text/css">

    /**
     * Print Stylesheet fuer Deinewebsite.de
    * @version         1.0
    * @lastmodified    16.06.2016
    */

    @media print {

     /* Inhaltsbreite setzen, Floats und Margins aufheben */
     /* Achtung: Die Klassen und IDs variieren von Theme zu Theme. Hier also eigene Klassen setzen */
     #content, #page {
     width: 100%;
     margin: 0;
     float: none;
     }

     /** Seitenränder einstellen */
     @page { margin: 2cm }

     /* Font auf 16px/13pt setzen, Background auf Weiß und Schrift auf Schwarz setzen.*/
     /* Das spart Tinte */
     body {
     font: 13pt Georgia, "Times New Roman", Times, serif;
     line-height: 1.3;
     background: #fff !important;
     color: #000;
     }

     h1 {
     font-size: 24pt;
     }

     h2, h3, h4 {
     font-size: 20pt;
     margin-top: 25px;
     }

     /* Alle Seitenumbrüche definieren */
     a {
         page-break-inside:avoid
     }
     blockquote {
         page-break-inside: avoid;
     }
     h1, h2, h3, h4, h5, h6 { page-break-after:avoid;
          page-break-inside:avoid }
     img { page-break-inside:avoid;
          page-break-after:avoid; }
     table, pre { page-break-inside:avoid }
     ul, ol, dl  { page-break-before:avoid }

     /* Linkfarbe und Linkverhalten darstellen */
     a:link, a:visited, a {
     background: transparent;
     color: #520;
     font-weight: bold;
     text-decoration: underline;
     text-align: left;
     }

     a {
         page-break-inside:avoid
     }

     a[href^=http]:after {
           content:" <" attr(href) "> ";
     }

     $a:after > img {
        content: "";
     }

     article a[href^="#"]:after {
        content: "";
     }

     a:not(:local-link):after {
        content:" <" attr(href) "> ";
     }

     /**
      * Eingebundene Videos verschwinden lassen und den Whitespace der iframes auf null reduzieren.
      */
     .entry iframe, ins {
         display: none;
         width: 0 !important;
         height: 0 !important;
         overflow: hidden !important;
         line-height: 0pt !important;
         white-space: nowrap;
     }
     .embed-youtube, .embed-responsive {
       position: absolute;
       height: 0;
       overflow: hidden;
     }

     /* Unnötige Elemente ausblenden für den Druck */

     #header-widgets, nav, aside.mashsb-container,
     .sidebar, .mashshare-top, .mashshare-bottom,
     .content-ads, .make-comment, .author-bio,
     .heading, .related-posts, #decomments-form-add-comment,
     #breadcrumbs, #footer, .post-byline, .meta-single,
     .site-title img, .post-tags, .readability
     {
     display: none;
     }

     /* Benutzerdefinierte Nachrichten vor und nach dem Inhalt einfügen */
     .entry:after {
     content: "\ Alle Rechte vorbehalten. (c) 2014 - 2016 TechBrain - techbrain.de";
     color: #999 !important;
     font-size: 1em;
     padding-top: 30px;
     }
     #header:before {
     content: "\ Vielen herzlichen Dank für das Ausdrucken unseres Artikels. Wir hoffen, dass auch andere Artikel von uns Ihr Interesse wecken können.";
     color: #777 !important;
     font-size: 1em;
     padding-top: 30px;
     text-align: center !important;
     }

     /* Wichtige Elemente definieren */
     p, address, li, dt, dd, blockquote {
     font-size: 100%
     }

     /* Zeichensatz fuer Code Beispiele */
     code, pre { font-family: "Courier New", Courier, mono}

     ul, ol {
     list-style: square; margin-left: 18pt;
     margin-bottom: 20pt;
     }

     li {
     line-height: 1.6em;
     }



     }


    </style>

    <div class="bg-gray-200 p-4">
     <h2>Client/Guardian Authorization for Use and Disclosure of Protected Health Information (PHI)</h2>

        <br>
        Client name: {{ $disclosure->name }} <br>
        Date of Birth: {{ $disclosure->dob }}  <br>
        SSN: {{ $disclosure->ssn }}
<p>
    I, {{ $disclosure->name }}, authorize: Kardia Counseling & Consulting, PLLC Address 325 Page Road, Pinehurst, NC 28370 Phone: (910) 295-0500 Fax: (910) 295-0503 to use, exchange, disclose or obtain certain protected health information (PHI) about me to/with:
        </p>

        Name: {{ $disclosure->disclose_name }}  <br>
        Phone: {{ $disclosure->disclose_phone }}<br>
        Address: {{ $disclosure->disclose_address }}<br>
        Fax: {{ $disclosure->disclose_fax }}<br>
<p>
    Information to be released (initial all that apply):
    <ul>
        @foreach ($disclosure->releasable_info as $info)
       <li> {{ $info }} </li>
        @endforeach
    </ul>
</p>

<p>
    Purpose of use/disclosure (initial all that apply):
    <ul>
        @foreach ($disclosure->purpose as $info)
       <li> {{ $info }} </li>
        @endforeach
    </ul>

</p>
<p>
        Redisclosure: <br>
        Once information is used or disclosed pursuant to this authorization, I understand that the federal privacy law, (45 CFR Parts 160 & 164) protecting PHI may not apply to the recipient and may not prohibit redisclosure. Other laws may prohibit redisclosure. When we disclose mental health and development disabilities information protected by the state law (GS 122C) or substance abuse treatment information protected by federal law (42 CFR Part 2) we must inform the recipient than disclosure is prohibited except as permitted or required by these two laws. Our notice of privacy practices describes the circumstances where disclosure is permitted or required by these laws.
    </p>
    <p>


        Revocation and expiration:
        I understand that I have the right to revoke this authorization at any time. My written revocation must be submitted to Shelwilbed O. Wray, LCAS, LMHC, LCMHC-Supervisor, at Kardia® Counseling & Consulting, PLLC (Privacy Officer). I understand I may refuse to sign this authorization form. I understand that Kardia® Counseling & Consulting, PLLC will not deny or refuse to provide treatment if I do not sign. This consent shall be valid for one year from the date signed unless noted below:
    </p>
        Date of expiration, (if less than one year): <br>
      {{ $disclosure->expiry_date   }}
      <p>
        Signature: <br>
        {{ $disclosure->signature }}
      </p>
      <p>
        Date: <br>
        {{ $disclosure->date }}
      </p>
      <p>
        Legal Guardian: <br>
        {{ $disclosure->guardian }}
      </p>
       <br>
       <br>


</div>
